<?php

class {{ControllerName}} extends BaseController {

	/**
	 * Display a listing of the {{pluralName}}.
	 * 
	 * @return Response
	 */
	public function index()
	{
		${{pluralName}} = {{SingleName}}::paginate();
		return View::make('{{pluralName}}.index', compact('{{pluralName}}'));
	}

	/**
	 * Show the for for creating a new {{singleName}}.
	 * 
	 * @return Response
	 */
	public function create()
	{
		${{singleName}} = new {{SingleName}}();
		return View::make('{{pluralName}}.create', compact('{{singleName}}'));
	}

	/**
	 * Store a newly created {{singleName}} in storage.
	 * 
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		if (${{singleName}} = {{SingleName}}::create($input)) {
			Session::flash('success', '{{SingleName}} created successfully!');
			return Redirect::route('{{ControllerName}}.index');
		} else {
			Session::flash('error', 'Something went wrong...');
			return Redirect::route('{{ControllerName}}.create')->withInput();
		}
	}

	/**
	 * Display the specified {{singleName}}.
	 * 
	 * @param  int $id
	 * @return Response
	 */
	public function show($id)
	{
		${{singleName}} = {{SingleName}}::find($id);
		return View::make('{{ControllerName}}.show', compact('{{singleName}}'));
	}

	/**
	 * Show the form for editing the specified {{singleName}}.
	 * 
	 * @param  int $id
	 * @return Response
	 */
	public function edit($id)
	{
		${{singleName}} = {{SingleName}}::find($id);
		return View::make('{{ControllerName}}.edit', compact('{{singleName}}'));
	}

	/**
	 * Update the specified {{singleName}} in storage.
	 * 
	 * @param  int $id
	 * @return Response
	 */
	public function update($id)
	{
		${{singleName}} = {{SingleName}}::find($id);
		$input = Input::all();
		if (${{singleName}}->fill($input)) {
			Session::flash('success', '{{SingleName}} updated successfully!');
			return Redirect::to('{{ControllerName}}.index');
		} else {
			Session::flash('error', 'Something went wrong...');
			return Redirect::route('{{ControllerName}}.edit', $id)->withInput();
		}
	}

	/**
	 * Remove the specified {{singleName}} from storage.
	 * 
	 * @param  int $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if ({{SingleName}}::destroy($id)) {
			Session::flash('success', '{{SingleName}} deleted!');
		} else {
			Session::flash('error', 'Could not delete {{singleName}}...');
		}
		return Redirect::route('{{ControllerName}}.index');
	}
}