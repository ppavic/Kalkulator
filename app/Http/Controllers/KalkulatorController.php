<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function calculate(Request $request)
    {

        $broj1 = $request->broj1;
        $broj2 = $request->broj2;
        $operacija = $request->operacija;

        if($request->has('broj1') && $request->has('broj2')){
        $request->validate(
            [
                'broj1' => 'required',
                'broj2' =>'required'
            ]);
        }
            switch ($operacija) {
                case 'zbrajanje':
                    return redirect()->back()->with('rezultat', strval($broj1 + $broj2));
                    break;
                case 'oduzimanje':
                    return redirect()->back()->with('rezultat', strval($broj1 - $broj2));
                    break;
                case 'mnozenje':
                    return redirect()->back()->with('rezultat', strval($broj1 * $broj2));
                    break;
                case 'dijeljenje':
                    try {
                        $rez = $broj1 / $broj2;
                        return redirect()->back()->with('rezultat', strval($rez));
                    } catch (\DivisionByZeroError $e) {
                        return redirect()->back()->withErrors('Dijeljenje s nulom nije dozvoljeno: Greška: ' . $e->getMessage());
                    }
                    break;
                default:
                    return view('calc');
            }
    }
}
