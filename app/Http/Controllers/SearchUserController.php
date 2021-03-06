<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class SearchUserController extends Controller
{
    public function searchLaptops ()
    {
        $laptops = Producto::where('category_id', 1)->orderBy('id', 'DESC')->get();

        return view('productos.filter.laptops', compact('laptops'));
    }

    public function searchTablets ()
    {
        $tablets = Producto::where('category_id', 2)->orderBy('id', 'DESC')->get();

        return view('productos.filter.tablets', compact('tablets'));
    }

    public function searchSmartphones ()
    {
        $smartphones = Producto::where('category_id', 3)->orderBy('id', 'DESC')->get();

        return view('productos.filter.smartphones', compact('smartphones'));
    }

    public function searchAllinOne ()
    {
        $allinone = Producto::where('category_id', 4)->orderBy('id', 'DESC')->get();

        return view('productos.filter.allinOne', compact('allinone'));
    }

    public function filterHP()
    {
        $hewlett = Producto::where('fabricante', 'hp')->get();

        return view('productos.marcas.hewlett', compact('hewlett'));
    }

    public function filterDell()
    {
        $dell = Producto::where('fabricante', 'dell')->get();

        return view('productos.marcas.dell', compact('dell'));
    }

    public function filterApple()
    {
        $apple = Producto::where('fabricante', 'apple')->get();

        return view('productos.marcas.apple', compact('apple'));
    }

    public function filterAcer()
    {
        $acer = Producto::where('fabricante', 'acer')->get();

        return view('productos.marcas.acer', compact('acer'));
    }

    public function filterSamsung()
    {
        $samsung = Producto::where('fabricante', 'samsung')->get();

        return view('productos.marcas.samsung', compact('samsung'));
    }

    public function filterAsus()
    {
        $asus = Producto::where('fabricante', 'asus')->get();

        return view('productos.marcas.asus', compact('asus'));
    }

    public function filterToshiba()
    {
        $toshiba = Producto::where('fabricante', 'toshiba')->get();

        return view('productos.marcas.toshiba', compact('toshiba'));
    }

    public function filterLenovo()
    {
        $lenovo = Producto::where('fabricante', 'lenovo')->get();

        return view('productos.marcas.lenovo', compact('lenovo'));
    }

    public function filterOtros()
    {
        $otros = Producto::where('fabricante', 'otros')->get();

        return view('productos.marcas.otros', compact('otros'));
    }

    public function filterBasica()
    {
        $basica = Producto::where('category_client_id', 1)->get();

        return view('productos.category.basica', compact('basica'));
    }

    public function filterSuperior()
    {
        $superior = Producto::where('category_client_id', 2)->get();

        return view('productos.category.superior', compact('superior'));
    }

    public function filterProfesional()
    {
        $profesional = Producto::where('category_client_id', 3)->get();

        return view('productos.category.profesional', compact('profesional'));
    }

    public function userList(Request $request){
        if ($request->has('search')){
            $productos = Producto::search($request->search)
                ->paginate(6);
        }else{
            $productos = Producto::paginate(6);
        }

        return view('productos-search', compact('productos'));
    }
}
