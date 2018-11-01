<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Food;
use App\Category;
use App\Promotion;
use App\FoodType;
use App\FoodDetail;
class FoodController extends Controller
{
    public function index()
    {
         $foods = Food::all();
         return view('foods.index', compact('foods'));
    }
    public function getAdd()
    {
        $category = Category::all();
        $promotions = Promotion::all();  
        $types = FoodType::all();
        return view('foods.create', compact('category', 'promotions', 'types'));
    }
    public function postAdd(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|unique:foods,name|max:255',
                'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'price' => 'required',
                'description' => 'required',
                'information' => 'required',
                'category' => 'required',
            ],
            [
                'name.required' => 'Yêu cầu nhập tên.',
                'name.unique' => 'Tên đã tồn tại.',
                'price.required' => 'Yêu cầu nhập giá',
                'category' => 'Yêu cầu chọn danh mục',
                'description.required' => 'Yêu cầu nhập mô tả',
                'information.required' => 'Yêu cầu nhập thông tin sản phẩm',
                'avatar.required' => 'Yêu cầu chọn ảnh',
                'avatar.mimes' => 'Ảnh phải có đuôi là jpeg, png, gif, svg',
            ]
        );
        if ($request->hasFile('avatar') && $request->hasFile('photos')) {
            $file = $request->avatar;
            $files = $request->file('photos');
            $file->move(config('image.paths.resource'), $file->getClientOriginalName());
            $food = Food::create([
                'name' => $request->name,
                'price' => $request->price,
                'information' => $request->information,
                'description' => $request->description,
                'size' => $request->size,
                'image' => $file->getClientOriginalName(),
                'category_id' => $request->category,
                'promotion_id' => $request->promotion,
                'type_id' => $request->type,
                'rating' => 1,
            ]);
            foreach ($request->photos as $photo) {
                $filename = $photo->storeAs(config('image.paths.resource'), $photo->getClientOriginalName());
                FoodDetail::create([
                    'food_id' => $food->id,
                    'image' => $filename,
                ]);
            }
            return back()->with('status','Create successful.');
        }
    }
    public function getEdit($id)
    {
        $data =  Food::findOrFail($id);
        $category = Category::all();
        $promotions = Promotion::all();  
        $types = FoodType::all();
        return view('stores.edit', compact('data'));
    }

    public function postEdit(Request $request, $id)
    {
         $request->validate(
            [
                'name' => 'required|unique:foods,name|max:255',
                'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'price' => 'required',
                'description' => 'required',
                'information' => 'required',
                'category' => 'required',
            ],
            [
                'name.required' => 'Yêu cầu nhập tên.',
                'name.unique' => 'Tên đã tồn tại.',
                'price.required' => 'Yêu cầu nhập giá',
                'category' => 'Yêu cầu chọn danh mục',
                'description.required' => 'Yêu cầu nhập mô tả',
                'information.required' => 'Yêu cầu nhập thông tin sản phẩm',
                'avatar.required' => 'Yêu cầu chọn ảnh',
                'avatar.mimes' => 'Ảnh phải có đuôi là jpeg, png, gif, svg',
            ]
        );
       if ($request->hasFile('avatar') && $request->hasFile('photos')) {
            $file = $request->avatar;
            $files = $request->file('photos');
            $file->move(config('image.paths.resource'), $file->getClientOriginalName());
            $food = Food::where('id', $id)->update([
                'name' => $request->name,
                'price' => $request->price,
                'information' => $request->information,
                'description' => $request->description,
                'size' => $request->size,
                'image' => $file->getClientOriginalName(),
                'category_id' => $request->category,
                'promotion_id' => $request->promotion,
                'type_id' => $request->type,
                'rating' => 1,
            ]);
            foreach ($request->photos as $photo) {
                $filename = $photo->storeAs(config('image.paths.resource'), $photo->getClientOriginalName());
                FoodDetail::update([
                    'food_id' => $food->id,
                    'image' => $filename,
                ]);
            }
            return back()->with('status','Update successful.');
        }
    }
}