<?php

use Carbon\Carbon;



if (! function_exists('getDateText')) {
    /**
     * Funcion que retorna el prefijo para nombres de archivos
     * @return [type] [description]
     */
    function getDateText($fecha,$format=null)
    {
    	$date = Carbon::createFromFormat('Y-m-d',$fecha);
    	switch ($date->month) {
    		case 1:
    			$mes = 'Enero';
    			break;
    		case 2:
    			$mes = 'Febrero';
    			break;
    		case 3:
    			$mes = 'Marzo';
    			break;
    		case 4:
    			$mes = 'Abril';
    			break;
    		case 5:
    			$mes = 'Mayo';
    			break;
    		case 6:
    			$mes = 'Junio';
    			break;
    		case 7:
    			$mes = 'Julio';
    			break;
    		case 8:
    			$mes = 'Agosto';
    			break;
    		case 9:
    			$mes = 'Setiembre';
    			break;
    		case 10:
    			$mes = 'Octubre';
    			break;
    		case 11:
    			$mes = 'Noviembre';
    			break;
    		case 12:
    			$mes = 'Diciembre';
    			break;
    	}
    	$result = '';
    	switch ($format) {
    		case 'year':
    			$result = $date->year;
    			break;

    		default:
    			$result = $mes.' '.$date->year;
    			break;
    	}
        return $result;
    }
}