<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Exception;

class ToolSetupController extends Controller
{
    /* ******************************************** */
    /*            1-- INTEGRAL SETUP                */
    /* ******************************************** */
    public function integral(Request $request)
    {
    	$request->validate([
            'mathFunction' 	=> 'required',
            'variable' 		=> 'required',
            'type' 			=> 'required',
            'upperLimit' 	=> 'nullable|required_with:lowerLimit|required_if:type,==,definite',
            'lowerLimit' 	=> 'nullable|required_with:upperLimit|required_if:type,==,definite',
        ]);
        try {
            $type = $request->type;
            $mathFunction = $request->mathFunction;
            $variable = $request->variable;
            $upperLimit = $request->upperLimit;
            $lowerLimit = $request->lowerLimit;
            if ($type == 'definite') {
                $equation = 'integrate ' . $mathFunction . ',' . $variable . ',' . $lowerLimit . ',' . $upperLimit;
            } else {
                $equation = 'integrate ' . $mathFunction . ',' . $variable;
            }
            return redirect()->back()->with(['data' => wolframalphaAPI($equation)]);
        } catch (Exception $e) {
        	return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* ******************************************** */
    /*         2-- IMPROPER INTEGRAL SETUP          */
    /* ******************************************** */
    public function improperIntegral(Request $request)
    {
        $request->validate([
            'mathFunction' => 'required',
            'variable'     => 'required',
            'upperLimit'   => 'required',
            'lowerLimit'   => 'required',
        ]);
        try {
            $mathFunction = $request->mathFunction;
            $variable = $request->variable;
            $upperLimit = $request->upperLimit;
            $lowerLimit = $request->lowerLimit;

            $equation = 'integrate ' . $mathFunction . ',' . $variable . ',' . $lowerLimit . ',' . $upperLimit;
            return redirect()->back()->with(['data' => wolframalphaAPI($equation)]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }
    /* ******************************************** */
    /*      3-- PARTIAL FRACTION INTEGRATION SETUP  */
    /* ******************************************** */
    public function partialFractionIntegration(Request $request)
    {
        $request->validate([
            'mathFunction'  => 'required',
            'variable'      => 'required',
            'type'          => 'required',
            'upperLimit'    => 'nullable|required_with:lowerLimit|required_if:type,==,definite',
            'lowerLimit'    => 'nullable|required_with:upperLimit|required_if:type,==,definite',
        ]);
        
        try {
            $type = $request->type;
            $mathFunction = $request->mathFunction;
            $variable = $request->variable;
            $upperLimit = $request->upperLimit;
            $lowerLimit = $request->lowerLimit;
            if ($type == 'definite') {
                $equation = 'integrate ' . $mathFunction . ',' . $variable . ',' . $lowerLimit . ',' . $upperLimit;
            } else {
                $equation = 'integrate ' . $mathFunction . ',' . $variable;
            }
            return redirect()->back()->with(['data' => wolframalphaAPI($equation)]);
        }catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* ******************************************** */
    /*        4-- DEFINITE INTEGRAL SETUP           */
    /* ******************************************** */
    public function definiteIntegral(Request $request)
    {
        $request->validate([
            'mathFunction' => 'required',
            'variable'     => 'required',
            'upperLimit'   => 'required',
            'lowerLimit'   => 'required',

        ]);
        try {
            $equation = 'integrate ' . $request->mathFunction . ',' . $request->variable . ',' . $request->lowerLimit . ',' . $request->upperLimit;
            return redirect()->back()->with(['data' => wolframalphaAPI($equation)]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* ******************************************** */
    /*         5-- INDEFINITE INTEGRAL SETUP        */
    /* ******************************************** */

    public function indefiniteIntegral(Request $request)
    {
        $request->validate([
            'equation' => 'required',
            'variable' => 'required',
        ]);
        try {
            $equation = 'integrate ' . $request->equation . ',' . $request->variable;
            return redirect()->back()->with(['data' => wolframalphaAPI($equation)]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* ******************************************** */
    /*       6--  LAPLACE TRANSFORM SETUP           */
    /* ******************************************** */

    public function laplaceTransform(Request $request)
    {
        $request->validate([
            'input' => 'required',
        ]);
        
        try {
            $equation = 'LaplaceTransform[' . $request->input . ",t,s]";
            return redirect()->back()->with(['data' => wolframalphaAPI($equation)]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* ******************************************** */
    /*         7- FOURIER TRANSFORM SETUP           */
    /* ******************************************** */
    public function fourierTransform(Request $request)
    {
        $request->validate([
            'input' => 'required',
        ]);
        try {
            $equation = 'FourierTransform [' . $request->input . ",t,w]";
            return redirect()->back()->with(['data' => wolframalphaAPI($equation)]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* ******************************************** */
    /*          8-- U-Substitution-Setup            */
    /* ******************************************** */
    public function uSubstitution(Request $request)
    {
        $request->validate([
            'mathFunction'  => 'required',
            'variable'      => 'required',
            'type'          => 'required',
            'upperLimit'    => 'nullable|required_with:lowerLimit|required_if:type,==,definite',
            'lowerLimit'    => 'nullable|required_with:upperLimit|required_if:type,==,definite',
        ]);
        try {
            $type = $request->type;
            $mathFunction = $request->mathFunction;
            $variable = $request->variable;
            $upperLimit = $request->upperLimit;
            $lowerLimit = $request->lowerLimit;
            if ($type == 'definite') {
                $equation = 'integrate ' . $mathFunction . ',' . $variable . ',' . $lowerLimit . ',' . $upperLimit;
            } else {
                $equation = 'integrate ' . $mathFunction . ',' . $variable;
            }
            return redirect()->back()->with(['data' => wolframalphaAPI($equation)]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* ******************************************** */
    /*      9-- Trigonometric-Substitution-Setup    */
    /* ******************************************** */
    public function trigonometricSubstitution(Request $request)
    {
        $request->validate([
            'mathFunction'  => 'required',
            'variable'      => 'required',
            'type'          => 'required',
            'upperLimit'    => 'nullable|required_with:lowerLimit|required_if:type,==,definite',
            'lowerLimit'    => 'nullable|required_with:upperLimit|required_if:type,==,definite',
        ]);
        try {
            $type = $request->type;
            $mathFunction = $request->mathFunction;
            $variable = $request->variable;
            $upperLimit = $request->upperLimit;
            $lowerLimit = $request->lowerLimit;
            if ($type == 'definite') {
                $equation = 'integrate ' . $mathFunction . ',' . $variable . ',' . $lowerLimit . ',' . $upperLimit;
            } else {
                $equation = 'integrate ' . $mathFunction . ',' . $variable;
            }
            return redirect()->back()->with(['data' => wolframalphaAPI($equation)]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* ******************************************** */
    /*        10-- INTEGRATION BY PARTS             */
    /* ******************************************** */
    public function integrationByParts(Request $request)
    {
        $request->validate([
            'mathFunction'  => 'required',
            'variable'      => 'required',
            'type'          => 'required',
            'upperLimit'    => 'nullable|required_with:lowerLimit|required_if:type,==,definite',
            'lowerLimit'    => 'nullable|required_with:upperLimit|required_if:type,==,definite',
        ]);
        try {
            $type = $request->type;
            $mathFunction = $request->mathFunction;
            $variable = $request->variable;
            $upperLimit = $request->upperLimit;
            $lowerLimit = $request->lowerLimit;
            if ($type == 'definite') {
                $equation = 'integrate ' . $mathFunction . ',' . $variable . ',' . $lowerLimit . ',' . $upperLimit;
            } else {
                $equation = 'integrate ' . $mathFunction . ',' . $variable;
            }
            return redirect()->back()->with(['data' => wolframalphaAPI($equation)]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* ******************************************** */
    /*            11-- LONGDIVISIONSETUP            */
    /* ******************************************** */
    public function longDivision(Request $request)
    {
        $request->validate([
            'mathFunction'  => 'required',
            'variable'      => 'required',
            'type'          => 'required',
            'upperLimit'    => 'nullable|required_with:lowerLimit|required_if:type,==,definite',
            'lowerLimit'    => 'nullable|required_with:upperLimit|required_if:type,==,definite',
        ]);
        
        try {
            $type = $request->type;
            $mathFunction = $request->mathFunction;
            $variable = $request->variable;
            $upperLimit = $request->upperLimit;
            $lowerLimit = $request->lowerLimit;
            if ($type == 'definite') {
                $equation = 'integrate ' . $mathFunction . ',' . $variable . ',' . $lowerLimit . ',' . $upperLimit;
            } else {
                $equation = 'integrate ' . $mathFunction . ',' . $variable;
            }
            return redirect()->back()->with(['data' => wolframalphaAPI($equation)]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* ******************************************** */
    /*          12-- AREA UNDER THE CURVE SETUP     */
    /* ******************************************** */
    public function areaUnderTheCurve(Request $request)
    {
        $request->validate([
            'mathFunction'  => 'required',
            'variable'      => 'required',
            'type'          => 'required',
            'upperLimit'    => 'nullable|required_with:lowerLimit|required_if:type,==,definite',
            'lowerLimit'    => 'nullable|required_with:upperLimit|required_if:type,==,definite',
        ]);
        
        try {
            $type = $request->type;
            $mathFunction = $request->mathFunction;
            $variable = $request->variable;
            $upperLimit = $request->upperLimit;
            $lowerLimit = $request->lowerLimit;
            if ($type == 'definite') {
                $equation = 'integrate ' . $mathFunction . ',' . $variable . ',' . $lowerLimit . ',' . $upperLimit;
            } else {
                $equation = 'integrate ' . $mathFunction . ',' . $variable;
            }
            return redirect()->back()->with(['data' => wolframalphaAPI($equation)]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* ******************************************** */
    /*         13--  REIMANN SUM SETUP              */
    /* ******************************************** */
    public function riemannSum(Request $request)
    {
        $request->validate([
            'sumof'         => 'required',
            'compute'       => 'required',
            'upperlimit'    => 'required',
            'lowerlimit'    => 'required',
            'number'        => 'required',
        ]);
        try {
            $sumof = $request->sumof;
            $compute = $request->compute;
            $upperlimit = $request->upperlimit;
            $lowerlimit = $request->lowerlimit;
            $number = $request->number;

            /* ---------- ADING STRING  FOR INPUT --------- */
            $reimann = "riemann sum of ";
            $from = "from x=";
            $to = "to";
            $with = "with";
            $math1 = "[//math:$compute//]";
            $math2 = "[//math:$sumof//]";
            $math3 = "[//math:$lowerlimit//]";
            $math4 = "[//math:$upperlimit//]";
            $math5 = "[//math:$number//]";
            $intervals = "intervals";
            $equation = $math1 . $reimann . $math2 . $from . $math3 . $to . $math4 . $with . $math5 . $intervals;
            return redirect()->back()->with(['data' => wolframalphaAPI($equation)]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* ******************************************** */
    /*          14-- TRAPEZOIDRULESETUP             */
    /* ******************************************** */
    public function trapezoidalRule(Request $request)
    {
        $request->validate([
            'MathInput'     => 'required',
            'upperlimit'    => 'required',
            'lowerlimit'    => 'required',
            'number'        => 'required'
        ]);
        try {
            $MathInput = $request->MathInput;
            $upperlimit = $request->upperlimit;
            $lowerlimit = $request->lowerlimit;
            $number = $request->number;

            /* ---------- MAKING STRING  FOR INPUT --------- */
            $integrate = "integrate";
            $numb = "dx using trapezoidal rule with";
            $from = "intervals from x=";
            $to = "to";
            $math2 = "[//math:$MathInput//]";
            $math3 = "[//math:$lowerlimit//]";
            $math4 = "[//math:$upperlimit//]";
            $math5 = "[//math:$number//]";
            $equation = $integrate . $math2 . $numb . $math5 . $from . $math3 . $to . $math4;
            return redirect()->back()->with(['data' => wolframalphaAPI($equation)]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* -------------------------------------------------------------------------- */
    /*                15--   area between curves calculator                       */
    /* -------------------------------------------------------------------------- */
    public function areabetweencurve(Request $request){
        $request->validate([
            'mathFunction'  => 'required',
            'variable'      => 'required',
            'upperLimit'    => 'nullable|required_with:lowerLimit',
            'lowerLimit'    => 'nullable|required_with:upperLimit',
        ]);
        try {
            $MathInput = $request->mathFunction;
            $Mathinput2 = $request->variable;
            $upperLimit = $request->upperLimit;
            $lowerLimit = $request->lowerLimit;
            /* ---------- MAKING STRING  FOR INPUT --------- */

            $integrate = "area between the curves ";
            $from = " from ";
            $to = " to ";
            $and = " and ";
            $math1 = "[//math:$MathInput//]";
            $math2 = "[//math:$Mathinput2//]";
            $math3 = "[//math:$upperLimit//]";
            $math4 = "[//math:$lowerLimit//]";

            $equation = $integrate . $math1 . $and . $math2 . $from . $math3 . $to . $math4;
            return redirect()->back()->with(['data' => wolframalphaAPI($equation)]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* -------------------------------------------------------------------------- */
    /*                   16--   Simpson's Rule Calculator                         */
    /* -------------------------------------------------------------------------- */
    public function simpsonsRule(Request $request){
        $request->validate([
            'upperLimit'=> 'required',
            'lowerLimit'=> 'required',
            'value3'    => 'required',
        ]);
        try {
            $value1 = $request->upperLimit;
            $value2 = $request->lowerLimit;
            $value3= $request->value3;
            /* ---------- MAKING STRING  FOR INPUT --------- */

            $integrate = "Simpson's Rule ";
            $root = "1/(2 root(x)-1)";
            $on = " on ";
            $with = "with interval size ";
            $value1 = "[//math:$value1,$value2//]";
            $value3 = "[//math:$value3//]";
            $equation = $integrate . $root . $on . $value1 . $with . $value3;
            return redirect()->back()->with(['data' => wolframalphaAPI($equation)]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* -------------------------------------------------------------------------- */
    /*                   17--     Arc Length Calculator                           */
    /* -------------------------------------------------------------------------- */
    public function arcLength(Request $request){
        $request->validate([
            'MathInput'     => 'required',
            'upperLimit'    => 'required',
            'lowerLimit'    => 'required',
        ]);
        try {
            $MathInput = $request->MathInput;
            $upperLimit = $request->upperLimit;
            $lowerLimit= $request->lowerLimit;
            /* ---------- MAKING STRING  FOR INPUT --------- */

            $integrate = "arc length ";
            $root = "$MathInput";
            $from = " from ";
            $to = "to";
            $upperLimit = "[//math:$upperLimit//]";
            $lowerLimit = "[//math:$lowerLimit//]";
            $equation = $integrate . $root . $from . $upperLimit . $to . $lowerLimit;
            return redirect()->back()->with(['data' => wolframalphaAPI($equation)]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* -------------------------------------------------------------------------- */
    /*            18--    Arc Length Of Polar Curve Calculator                    */
    /* -------------------------------------------------------------------------- */
    public function arcLengthofPolarcurve(Request $request){
        $request->validate([
            'MathInput'     => 'required',
            'upperLimit'    => 'required',
            'lowerLimit'    => 'required',
        ]);
        try {
            $MathInput = $request->MathInput;
            $upperLimit = $request->upperLimit;
            $lowerLimit= $request->lowerLimit;
            /* ---------- MAKING STRING  FOR INPUT --------- */

            $integrate = "arc length polar r = ";
            $root = "$MathInput";
            $from = " from ";
            $to = "to";
            $upperLimit = "[//math:$upperLimit//]";
            $lowerLimit = "[//math:$lowerLimit//]";
            $equation = $integrate . $root . $from . $upperLimit . $to . $lowerLimit;
            return redirect()->back()->with(['data' => wolframalphaAPI($equation)]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* -------------------------------------------------------------------------- */
    /*                19--       Limit Of Sum Calculator                          */
    /* -------------------------------------------------------------------------- */
    public function limitofSum(Request $request){
        $request->validate([
            'variable'  => 'required',
            'lim'       => 'required',
            'number'    => 'required',
        ]);
        try {
            $variable = $request->variable;
            $lim = $request->lim;
            $number= $request->number;
            /* ---------- MAKING STRING  FOR INPUT --------- */

            $integrate = "lim n->inf summation ";
            $lim    = "1/n*(cos(k*pi/2/n))^2";
            $k      = ",k=";
            $math   = "[//math:$number//],[//math:$variable//]";
            $equation  = $integrate . ($lim . $k . $math);
            return redirect()->back()->with(['data' => wolframalphaAPI($equation)]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* -------------------------------------------------------------------------- */
    /*              20--        Midpoint Rule Calculator                          */
    /* -------------------------------------------------------------------------- */
    public function midpointRule(Request $request){
        $request->validate([
            'x1' => 'required',
            'x2' => 'required',
            'y1' => 'required',
            'y2' => 'required',
        ]);

        try {
            $x1 = $request->x1;
            $x2= $request->x2;
            $y1= $request->y1;
            $y2= $request->y2;
            /* ---------- MAKING STRING  FOR INPUT --------- */

            $x = "([//math:$x1//]+[//math:$x2//])/2";
            $y = "([//math:$y1//]+[//math:$y2//])/2";
            $equation = $x .','. $y ;
            return redirect()->back()->with(['data' => wolframalphaAPI($equation)]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* ******************************************** */
    /*          21-- DOUBLE INTEGRAL SETUP          */
    /* ******************************************** */
    public function doubleIntegral(Request $request)
    {
        $request->validate([
            'mathFunction'  => 'required',
            'variable'      => 'required',
            'type'          => 'required',
            'x_upperLimit'  => 'nullable|required_if:type,==,definite',
            'x_lowerLimit'  => 'nullable|required_if:type,==,definite',
            'y_upperLimit'  => 'nullable|required_if:type,==,definite',
            'y_lowerLimit'  => 'nullable|required_if:type,==,definite'
        ]);
        $variables = explode('d', $request->variable);
        $first = $variables[1];
        $second = $variables[2];
        try {
            $mathFunction = $request->mathFunction;
            $x_upperLimit = $request->x_upperLimit;
            $x_lowerLimit = $request->x_lowerLimit;
            $y_upperLimit = $request->y_upperLimit;
            $y_lowerLimit = $request->y_lowerLimit;
            $steps = array();

            if ($request->type == 'indefinite') {
                $equation = "integrate(" . $mathFunction . ", (" . $first . "), (" . $second . "))";
            } else if ($request->type == 'definite') {
                $equation = "integrate(" . $mathFunction . ",(" . $first . "," . $x_lowerLimit . "," . $x_lowerLimit . "), (" . $second . "," . $y_upperLimit . "," . $y_lowerLimit . "))";
            }
            $equation = urlencode($equation);

            /* ----------------------- first variable ----------------------- */
            $step1 = sympyStepAPI($first, $equation);
            $steps[] = $step1;
            /* ---------------------------- ANSWER ---------------------------- */
            $getanswer = sympyAnswerAPI($first, $equation);
            $answer = explode(')', $getanswer[1]);

            /* ------------------------ SECOND VARIABLE ----------------------- */
            $getanswer = explode(')', $getanswer[3]);
            $equation = urlencode($getanswer[0]);
            $step2 = sympyStepAPI($second, $equation);
            $steps[] = $step2;

            $data = ['steps' => $steps, 'answer' => $answer[0]];
            return redirect()->back()->with(['result' => $data]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* ******************************************** */
    /*          22--  TRIPPLE INTEGRAL SETUP        */
    /* ******************************************** */
    public function trippleIntegral(Request $request)
    {
        $request->validate([
            'mathFunction'  => 'required',
            'variable'      => 'required',
            'type'          => 'required',
            'x_upperLimit'  => 'nullable|required_if:type,==,definite',
            'x_lowerLimit'  => 'nullable|required_if:type,==,definite',
            'y_upperLimit'  => 'nullable|required_if:type,==,definite',
            'y_lowerLimit'  => 'nullable|required_if:type,==,definite',
            'z_upperLimit'  => 'nullable|required_if:type,==,definite',
            'z_lowerLimit'  => 'nullable|required_if:type,==,definite',
        ]);
        $variables = explode('d', $request->variable);
        $first = $variables[1];
        $second= $variables[2];
        $third = $variables[3];
        try {
            $mathFunction = $request->mathFunction;
            $x_upperLimit = $request->x_upperLimit;
            $x_lowerLimit = $request->x_lowerLimit;
            $y_upperLimit = $request->y_upperLimit;
            $y_lowerLimit = $request->y_lowerLimit;
            $z_upperLimit = $request->z_upperLimit;
            $z_lowerLimit = $request->z_lowerLimit;
            $steps = array();
            if ($request->type == 'indefinite') {
                $equation = "integrate(" . $mathFunction . ", (" . $first . "), (" . $second . "))";
            } else if ($request->type == 'definite') {
                $equation = "integrate(" . $mathFunction . ",(" . $first . "," . $x_lowerLimit . "," . $x_lowerLimit . "), (" . $second . "," . $y_upperLimit . "," . $y_lowerLimit . "),(" . $third . "," . $z_upperLimit . "," . $z_lowerLimit . "))";
            }
            /* ----------------------------- STEP1 ---------------------------- */
            $step1 = sympyStepAPI($first, urlencode($equation));
            $steps[] = $step1;

            /* ---------------------------- ANSWER1 --------------------------- */
            $getanswer1 = sympyAnswerAPI($first, $equation);
            $answer     = explode(')', $getanswer1[1]);

            
            /* ----------------------------- STEP2 ---------------------------- */
            $getanswer1 = explode(')', $getanswer1[3]);
            $step2      = sympyStepAPI($second, urlencode($getanswer1[0]));
            $steps[] = $step2;

            /* ---------------------------- ANSWER2 ---------------------------- */
            $equation = "integrate(" . $getanswer1[0] . ", (" . $first . "), (" . $second . "), (" . $third . "))";
            $getanswer2 = sympyAnswerAPI($second, urlencode($equation));
            
            $equation = urlencode($getanswer2[0]);

            /* ----------------------------- STEP3 ---------------------------- */
            $getanswer2 = explode(')', $getanswer2[3]);
            $step3      = sympyStepAPI($third, urlencode($getanswer2[0]));
            $steps[] = $step3;

            $data = ['steps' => $steps, 'answer' => $answer[0]];
            return redirect()->back()->with(['result' => $data]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* ******************************************** */
    /*          23--    SHELL METHOD SETUP           */
    /* ******************************************** */
    public function shellMethod(Request $request)
    {
        $request->validate([
            'equation' => 'required',
            'ul'       => 'required',
            'll'       => 'required',
        ]);
        try {
            $equation = $request->equation;
            $ul = $request->ul;
            $ll = $request->ll;
            $steps = array();

            $equation = "integrate(2pi*(x)*(" . $equation . "), (x," . $ll . "," . $ul . "))";

            // GET STEPS
            $step = sympyStepAPI('x', urlencode($equation));
            $steps[] = $step;
            
            // GET ANSWER
            $getanswer = sympyAnswerAPI('x', $equation);
            $answer    = explode(')', $getanswer[1]);
            $getaprox  = sympyApproximatorAPI('x', urlencode($answer[0]), 5);

            $data = ['steps' => $steps, 'answer' => $getaprox];
            return redirect()->back()->with(['result' => $data]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* ******************************************** */
    /*          24-- WASHER METHOD SETUP            */
    /* ******************************************** */
    public function washerMethod(Request $request)
    {
        $request->validate([
            'fx'        => 'required',
            'gx'        => 'required',
            'upperLimit'=> 'required',
            'lowerLimit'=> 'required',
        ]);
        try {
            $fx = $request->fx;
            $gx = $request->gx;
            $ul = $request->upperLimit;
            $ll = $request->lowerLimit;
            $steps = array();

            $equation = 'integrate(pi*((' . $fx . ')^2 - (' . $gx . ')^2), (x,' . $ul . ',' . $ll . '))';

            // GET STEPS
            $step = sympyStepAPI('x', urlencode($equation));
            $steps[] = $step;
    
            // GET ANSWER
            $getanswer = sympyAnswerAPI('x', $equation);
            $answer    = explode(')', $getanswer[1]);
            $getaprox  = sympyApproximatorAPI('x', urlencode($answer[0]), 5);
            $data = ['steps' => $steps, 'answer' => $getaprox];
            return redirect()->back()->with(['result' => $data]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }

    /* ******************************************** */
    /*         25-- DISC METHOD SETUP               */
    /* ******************************************** */
    public function discMethod(Request $request)
    {
        $request->validate([
            'fx' => 'required',
            'gx' => 'required',
            'ul' => 'required',
            'll' => 'required',
        ]);
        try {
            $fx = $request->fx;
            $gx = $request->gx;
            $ul = $request->ul;
            $ll = $request->ll;
            $steps= array();

            $equation = 'integrate(pi*((' . $fx . ')^2 - (' . $gx . ')^2), (x,' . $ul . ',' . $ll . '))';

            // GET STEPS
            $step = sympyStepAPI('x', urlencode($equation));
            $steps[] = $step;
    
            // GET ANSWER
            $getanswer = sympyAnswerAPI('x', $equation);
            $answer    = explode(')', $getanswer[1]);
            $getaprox  = sympyApproximatorAPI('x', urlencode($answer[0]), 5);
            $data = ['steps' => $steps, 'answer' => $getaprox];

            return redirect()->back()->with(['result' => $data]);
        } catch (Exception $e) {
            return back()->withErrors(['errors' => [$e->getMessage()]]);
        }
    }
}