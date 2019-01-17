<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use App\Event;
use DB;
use Illuminate\Support\Facades\Input;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('home', compact('events'));

    }


    public function submit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'Location' => 'required'
        ]);

        $event = new Event;
        $event->name = $request->input('name');
        $event->Location = $request->input('Location');
        $event->Time = $request->input('Time');

        $event->save();

        return redirect('/');
    }

    public function getEvents()
    {
        $events = Event::all();

        return view('events')->with('events', $events);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Event $event, $id)
    {
        $event= Event::find($id);
        return view('edit',compact ('event'));
    }

    public function update(TaskRequest $request, Event $event, $id)

    {
        $event->update($request->all());

        $event= Event::find($id);

        $event->name = $request ->name;
        $event->Location = $request ->Location;
        $event->Time = $request ->Time;
        $event->save();
        return redirect('/');

    }

    public function delete($id){
        Event::destroy($id);

        return redirect('/');

    }

public function searc()
{
    $q= Input::get('q');
    if ($q !=""){
        $event = Event::where('name', 'LIKE', '%' . $q . '%')
            ->orWhere('Location', 'LIKE', '%' . $q . '%')
            ->get();
        if(count($event)> 0)
            return view('search')->withDetails($event)->withQuery($q);
    }
    return view('search')->withMessage("No events found");

}








}
