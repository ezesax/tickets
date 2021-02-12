<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\User;

class TicketController extends Controller
{
    public function getTicketByCode($ticketCode)
    {
        try{
            $ticket = Ticket::where('code', $ticketCode)->first();
            if(!isset($ticket))
                return response()->json(['data' => 'Ticket doesn\'t exist'], 404);

            return response()->json(['data' => $ticket], 200);
        }catch(\Exception $e){
            return response()->json(['data' => 'Internal server error'], 500);
        }
    }

    public function getTicketsByUserEmail($userEmail)
    {
        try{
            $user = User::where('email', $userEmail)->first();

            if(!isset($user))
                return response()->json(['data' => 'User doesn\'t exist'], 404);

            $tickets = Ticket::where('user_id', $user->id)->where('status', 'active')->get();
            $data = count($tickets) == 0 ? 'No active tickets' : $tickets;

            return response()->json(['data' => $data], 200);
        }catch(\Exception $e){
            return response()->json(['data' => 'Internal server error'], 500);
        }
    }
}
