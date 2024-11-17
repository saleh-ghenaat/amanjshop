<?php

namespace App\Http\Controllers\Customer\Profile;

use App\Http\Controllers\Controller;
use App\Models\Market\Gharardad;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use App\Http\Requests\Customer\Profile\GarardadProductRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Morilog\Jalali\Jalalian;

class GharardadController extends Controller
{
    public function index()
    {  
        $userid = Auth::user()->id;
        $gharardads = Gharardad::where('user_id', $userid)->get();
        return view('customer.profile.gharardadindex',compact('gharardads'));
    }
    public function store(GarardadProductRequest $garardadproductrequest , Gharardad $gharardad)
    {   
        $users = User::where('id', Auth::user()->id)->first();
        
        $inputs = $garardadproductrequest->all();
        $darsadsood = $garardadproductrequest->month * 0.035;
        $mande = $garardadproductrequest->price - $garardadproductrequest->downPaymentPercentage;
        $sood =   $mande* $darsadsood ;
        $inputs['user_id'] = Auth::user()->id;
        $inputs['mablagh_pishpardakht'] =$garardadproductrequest->downPaymentPercentage;
        $inputs['mablagh_vam']=$sood + $mande ;
        
        $inputs['price']= $garardadproductrequest->price;
        $inputs['tedad_aghsat']= $garardadproductrequest->month;
        $inputs['nahve_pardakht']= $garardadproductrequest->nahvepardakht;
        $users->first_name = $inputs['name'];
        $users->save();
     
        
        $adadd = 1;  
        $pricemonth = 1;
        $vam = $sood + $mande;
        $emrooz = now();
        $inputs['start_date']=$emrooz=Jalalian::fromDateTime($emrooz);
        $inputs['end_date']= $emrooz->addMonths( $garardadproductrequest->month);
        $today = now();
        
        
        if($garardadproductrequest->nahvepardakht == 1){
            $checkprice = $vam / $garardadproductrequest->month;
            for ($i=1; $i<=$garardadproductrequest->month ; $i++) {
                $nextMonth = $today->addMonth(1);
                $nextMonthJalali = Jalalian::fromDateTime($nextMonth);
                $inputs['check'.$adadd.'_date'] = $nextMonthJalali->format('Y-m-d'); 
                $adadd++;
                $inputs['check_price'.$pricemonth] = $checkprice;
                $pricemonth++;
                
            }        
        }
        if($garardadproductrequest->nahvepardakht == 2){
            $checkprice = $vam / $garardadproductrequest->month;
            $checkpricetowmonthly = $checkprice*2;
            for ($i=1; $i<=$garardadproductrequest->month/2 ; $i++) {
                $nextMonth = $today->addMonth(2);
                $nextMonthJalali = Jalalian::fromDateTime($nextMonth);
                $inputs['check'.$adadd.'_date'] = $nextMonthJalali->format('Y-m-d'); 
                $adadd++;
                $inputs['check_price'.$pricemonth] = $checkpricetowmonthly;
                $pricemonth++;
                
            }        
        }
        
        $ghrardads = Gharardad::create($inputs);
       return redirect()->route('customer.profile.gharardad');

    }
   
    public function show()
    {
        return view('customer.profile.gharardad');

    }
    public function filter()
    {
        $userId = Auth::user()->id;
        $formData = Gharardad::where('user_id', $userId)->first();
        return view('customer.profile.gharardad-filter',compact('formData'));

    }
   
}
