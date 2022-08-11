<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\callback;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tickets.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $tickets = Ticket::get();
        $tickets = DB::table('tickets')->take(1)->orderBy('created_at', 'desc')->get();
        return view('tickets.create', [
            'tickets' => $tickets,
        ]);
    }


    // public static function generateSerialNumber(int $id)
    // {
    //     $start = 0; // 0 = A, 702 or 703 = AAA, adjust accordingly
    //     $letters_value = $start + (ceil($id / 999) - 1);
    //     $numbers = ($id % 999 === 0) ? 999 : $id % 999;

    //     $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    //     $base = strlen($characters);
    //     $letters = '';

    //     // while there are still positive integers to divide
    //     while ($letters_value) {
    //         $current = $letters_value % $base;
    //         $letters = $characters[$current] . $letters;
    //         $letters_value = floor($letters_value / $base);
    //     }

    //     return $letters . '-' . sprintf('%03d', $numbers);
    // }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $serial = Helper::IDGenerator(new Ticket(), 'id', 4, 'NAR');
        /** Generate id */
        $q = new Ticket;
        $q->date = Carbon::parse(now());
        $q->ticket_no = $serial;
        $q->time = Carbon::now()->format('H:i:s');
        $save =  $q->save();
        if ($save) {
            return back()->with('success', 'New Ticket Added Successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }

    public function print($id)
    {
        // $ticket = Ticket::findOrFail($id);

        // return view('tickets.create', [
        //     'ticket' => $ticket

        // ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tickets = Ticket::findOrFail($id);
        return view('tickets.show', [
            'tickets' => $tickets

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
