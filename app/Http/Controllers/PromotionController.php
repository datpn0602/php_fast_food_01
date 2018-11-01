<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promotion;

class PromotionController extends Controller
{
	public function index()
    {
         $promotions = Promotion::all();
         return view('promotions.index', compact('promotions'));
    }
    public function getAdd()
    {
    	return view('promotions.create');
    }

    public function postAdd(Request $request)
    {
    	$request->validate(
            [
                'discount' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
            ],
            [
                'discount.required' => 'Yêu cầu số giảm giá.',
                'start_date.required' => 'Yêu cầu nhập ngày bắt đầu.',
                'end_date.required' => 'Yêu cầu nhập ngày kết thúc',
            ]
        );
        $promotion = Promotion::create([
            'discount' => $request->discount,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        return back()->with('status','Create successful.');
	}

    public function getEdit($id)
    {
        $data =  Promotion::findOrFail($id);
        return view('promotions.edit', compact('data'));
    }

    public function postEdit(Request $request, $id)
    {
        $request->validate(
            [
                'discount' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
            ],
            [
                'discount.required' => 'Yêu cầu số khuyễn mãi.',
                'start_date.required' => 'Yêu cầu nhập nhập ngày bắt đầu',
                'end_date.required' => 'Yêu cầu nhập nhập ngày kết thúc',
            ]
        );
        $promotion = Promotion::where('id', $id)->update([
            'discount' => $request->discount,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        return back()->with('status','Update successful.');
    }
}
