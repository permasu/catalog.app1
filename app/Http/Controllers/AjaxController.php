<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /**
     * Поиск адресса по строке
     *
     * @param string $string строка поиска
     * @param integer $limit (defaults: 10) кол-во возвращаемых строк
     *
     * @return array
     */
    public function get_company_address_search($string = '', $limit = 10)
    {
        $request = $string !=='' ? $string : \Request::get('q');

        $company = new Company();
        return $company->searchAddress($request, $limit);
    }

    /**
     * Поиск адресса по строке
     *
     * @param integer $limit кол-во возвращаемых строк
     *
     * @return array
     */
    public function post_company_address_search( $limit = 0 )
    {
        $string = \Request::get('q');

        $company = new Company();
        return $company->searchAddress($string, $limit);
    }

    /**
     * Поиск компании по названию
     *
     * @param string  $string (default: '')
     * @param integer $limit (default: 10)
     *
     * @return array
     * */

    public function get_company_search( $string = '', $limit = 10) {
        $request = $string !=='' ? $string : \Request::get('q');

        $company = new Company();

        $result = $company->where('full_name', 'like', "%$request%")->get()->toArray();

        foreach ( $result as &$item ) {
            $item['link'] = \URL::route('company_view', $item['id']);
        }

        return $result;
    }
}
