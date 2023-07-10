<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Branch;
use Illuminate\Http\Request;

/**
 * Class NewsController
 * @package App\Http\Controllers
 */
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::paginate();

        return view('admin.news.index', compact('news'))
            ->with('i', (request()->input('page', 1) - 1) * $news->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = new News();
        $branches = Branch::pluck('name','id');
        return view('admin.news.create', compact('news','branches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(News::$rules);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $image_name = $request->file('image')->getClientOriginalName();
            $request->image->move('upload/images/news/', $image_name);
            $input['image'] = $image_name;
        }
        $news = News::create($input);

        return redirect()->route('news.index')
            ->with('success', 'News created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);

        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        $branches = Branch::pluck('name','id');
        return view('admin.news.edit', compact('news','branches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  News $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        request()->validate(News::$rules);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $image_name = $request->file('image')->getClientOriginalName();
            $request->image->move('upload/images/news/', $image_name);
            $input['image'] = $image_name;
        }
        $news->update($input);

        return redirect()->route('news.index')
            ->with('success', 'News updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $news = News::find($id)->delete();

        return redirect()->route('news.index')
            ->with('success', 'News deleted successfully');
    }
}
