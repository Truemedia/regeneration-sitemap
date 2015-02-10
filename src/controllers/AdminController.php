<?php
namespace Regeneration\Sitemap\Controllers;

	class AdminController extends \BaseController
	{
		/**
	     * The layout that should be used for standard HTML responses.
	     */
	    protected $layout = 'layouts.crudl';

		/**
		 * Display a listing of the resource.
		 *
		 * @return Response
		 */
		public function index()
		{
			// Consolidate data
			$data = array('hello' => 'world');

			// Handle request
			switch (\Request::format())
			{
				case 'json':
					return Response::json($data); // API
				break;

				default:
					$this->layout->content = \View::make('sitemap::admin.listing', $data); // HTML
				break;
			}
		}


		/**
		 * Show the form for creating a new resource.
		 *
		 * @return Response
		 */
		public function create()
		{
			// Consolidate data
			$data = array('hello' => 'world');

			// Handle request
			switch (\Request::format())
			{
				case 'json':
					return Response::json($data); // API
				break;

				default:
					$this->layout->content = \View::make('sitemap::admin.create', $data); // HTML
				break;
			}
		}


		/**
		 * Store a newly created resource in storage.
		 *
		 * @return Response
		 */
		public function store()
		{
			// Consolidate data
			$data = array('hello' => 'world');

			// Handle request
			switch (\Request::format())
			{
				case 'json':
					return Response::json($data); // API
				break;

				default:
					$this->layout->content = \View::make('sitemap::admin.store', $data); // HTML
				break;
			}
		}


		/**
		 * Display the specified resource.
		 *
		 * @param  int  $id
		 * @return Response
		 */
		public function show($id)
		{
			// Consolidate data
			$data = array('hello' => 'world');

			// Handle request
			switch (\Request::format())
			{
				case 'json':
					return Response::json($data); // API
				break;

				default:
					$this->layout->content = \View::make('sitemap::admin.show', $data); // HTML
				break;
			}
		}


		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param  int  $id
		 * @return Response
		 */
		public function edit($id)
		{
			// Consolidate data
			$data = array('hello' => 'world');

			// Handle request
			switch (\Request::format())
			{
				case 'json':
					return Response::json($data); // API
				break;

				default:
					$this->layout->content = \View::make('sitemap::admin.edit', $data); // HTML
				break;
			}
		}


		/**
		 * Update the specified resource in storage.
		 *
		 * @param  int  $id
		 * @return Response
		 */
		public function update($id)
		{
			// Consolidate data
			$data = array('hello' => 'world');

			// Handle request
			switch (\Request::format())
			{
				case 'json':
					return Response::json($data); // API
				break;

				default:
					$this->layout->content = \View::make('sitemap::admin.update', $data); // HTML
				break;
			}
		}


		/**
		 * Remove the specified resource from storage.
		 *
		 * @param  int  $id
		 * @return Response
		 */
		public function destroy($id)
		{
			// Consolidate data
			$data = array('hello' => 'world');

			// Handle request
			switch (\Request::format())
			{
				case 'json':
					return Response::json($data); // API
				break;

				default:
					$this->layout->content = \View::make('sitemap::admin.destroy', $data); // HTML
				break;
			}
		}
	}