<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use PDO;

class GenerateValidationRules extends Command
{
    protected $signature = 'generate:rules {table} {--name=}';
    //protected $signature = 'report:generate {--start-date=} {--end-date=}';

    protected $description = 'Generates validation rules based on the columns of a given table.';

    public function handle()
    {
        $table = $this->argument('table');
        $nameFile = $this->option('name');

        $db = new PDO("mysql:host=" . env('DB_HOST') . ";dbname=" . env('DB_DATABASE'), env('DB_USERNAME'), env('DB_PASSWORD'));

        $stmt = $db->prepare("DESCRIBE $table");
        $stmt->execute();
        $columns = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $rule = [];

        foreach ($columns as $column) {
            //var_dump($column);
            $type = $column['Type'];
            //$length = $column['Length'];
            $lengthTmp = explode( "(" , $type);
            $length = !empty($lengthTmp[1]) ? "|max:" .(int)$lengthTmp[1] : null;
            $column_name = $column['Field'];

            $rule = '';

            if (strpos($type, 'int') !== false) {
                $rule = 'integer|nullable';
            } elseif (strpos($type, 'decimal') !== false) {
                $rule = 'numeric|nullable';
            } elseif (strpos($type, 'float') !== false) {
                $rule = 'numeric|nullable';
            } elseif (strpos($type, 'varchar') !== false || strpos($type, 'text') !== false) {
                $rule = 'string'.$length.'|nullable';
            } elseif (strpos($type, 'date') !== false) {
                $rule = 'date_format:Y-m-d|nullable';
            } elseif (strpos($type, 'time') !== false) {
                $rule = 'date_format:H:i|nullable';
            } elseif (strpos($type, 'datetime') !== false) {
                $rule = 'date_format:Y-m-d H:i:s|nullable';
            }

            if ($column['Null'] === 'NO' && !$column['Default']) {
                $rule .= '|required';
            }

            if ($rule) {
                $rules[$column_name] = $rule;
            }
        }

        $nameFileFull = !empty($nameFile) ? $nameFile :  ucfirst($table);

        $rulesFile = 'app/Http/Requests/' . $nameFileFull . 'Request.php';
        $template = File::get('app/Console/Templates/RequestTemplate.txt');
        $template = str_replace('{{table}}', $nameFileFull, $template);
        $template = str_replace('{{rules}}', var_export($rules, true), $template);
        File::put($rulesFile, $template);

        $this->info('Rules generated successfully!');
    }
}