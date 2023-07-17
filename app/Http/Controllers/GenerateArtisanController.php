<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Doctrine\DBAL\Types\Type;

class GenerateArtisanController extends Controller
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function GenerateRules(string $table)
    {

        $columns = DB::getDoctrineSchemaManager()->listTableColumns($table);

        /*$columnInfo = [];
        foreach ($columns as $column) {
            $columnArr = [];
            $columnArr['name'] = $column->getName();
            $columnArr['type'] = Type::getType($column->getType()->getName())->getName();
            $columnArr['notnull'] = $column->getNotnull();
            $columnArr['length'] = $column->getLength();
            $columnArr['precision'] = $column->getPrecision();
            $columnArr['scale'] = $column->getScale();
            $columnArr['default'] = $column->getDefault();
            $columnArr['unsigned'] = $column->getUnsigned();
            $columnArr['autoincrement'] = $column->getAutoincrement();
            $columnInfo[] = $columnArr;
        }*/

        //return response()->json($columnInfo);


        $rules = [];
        $columns = DB::getSchemaBuilder()->getColumnListing($table);

        foreach ($columns as $column) {
            $type = DB::getSchemaBuilder()->getColumnType($table, $column);
            $col = DB::getDoctrineColumn($table, $column);
            $tableName = "nombre_de_tu_tabla";
            $columns = Schema::getColumnListing($table);
        
            //return $columns;
            /*echo "Columna: " . $col->getName() . "<br>";
            echo "Tipo: " . (Type::getType($col->getType()->getName())->getName()). "<br>";
            echo "Tamaño: " . $col->getLength() . "<br>";
            echo "Es Nullable: " . ($col->getNotnull() ? 'No' : 'Sí') . "<br>";
            echo "Valor por defecto: " . $col->getDefault() . "<br><br>";
            echo "Tipo: " . $type. "<br><br>--------------------------------------";
            //var_dump($col->getType()) ;*/
            $rules[$column] = '';
            /** Si  El campo es Not Null**/
            if($col->getNotnull()){
                $rules[$column]  = "required|";
            }
            //echo $type."<br>";
            switch ($type) {
                case 'text':
                case 'string':
                    $rules[$column] .= 'string';
                    break;
                case 'float':
                case 'integer':
                    $rules[$column] .= 'integer';
                    break;
                case 'date':
                    $rules[$column] .= "date_format:Y/m/d";
                    break;
                case 'decimal':
                    $rules[$column] .= 'numeric';
                    break;
                default:
                    $rules[$column] .= "-----------".$type;
                    break;    
                // Agrega más casos para otros tipos de datos aquí
            }
            


            if($col->getLength() > 0){
                $max = $col->getLength();
                $rules[$column]  = $rules[$column] . "|max:".$max;
            }
            elseif($type == "decimal"){
                //$max = explode("," )[0];
                $maxInteger = $col->getPrecision();
                $maxDecimal = $col->getScale();

                $rules[$column]  = $rules[$column] . "|max:".$col->getPrecision()."|regex:/^\d*\.\d{".$maxInteger.",".$maxDecimal."}$/";
            }
        }
        $return = "";
        $return .= "public function rules(){<br>";
        $return .= "<div style='padding-left:4em;'>return [</div>";
        foreach($rules AS $rulesVal => $rulesKey){
            $return .= "<div style='padding-left:8em;'>'".$rulesVal."' => '".$rulesKey."',</div>";
        }
        $return .= "<div style='padding-left:4em;'>];</div>";
        $return .= "}";
        echo $return;
        //return $rules;
        return "";
    }
}


