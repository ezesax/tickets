<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ticket = new Ticket();
        $ticket->user_id = '1';
        $ticket->code = 'tk-0001';
        $ticket->description = 'Ticket de prueba número uno';
        $ticket->status = 'active';
        $ticket->save();

        $ticket = new Ticket();
        $ticket->user_id = '1';
        $ticket->code = 'tk-0002';
        $ticket->description = 'Ticket de prueba número dos';
        $ticket->status = 'active';
        $ticket->save();

        $ticket = new Ticket();
        $ticket->user_id = '1';
        $ticket->code = 'tk-0003';
        $ticket->description = 'Ticket de prueba número tres';
        $ticket->status = 'active';
        $ticket->save();

        $ticket = new Ticket();
        $ticket->user_id = '1';
        $ticket->code = 'tk-0004';
        $ticket->description = 'Ticket de prueba número cuatro';
        $ticket->status = 'active';
        $ticket->save();

        $ticket = new Ticket();
        $ticket->user_id = '2';
        $ticket->code = 'tk-0005';
        $ticket->description = 'Ticket de prueba número cinco';
        $ticket->status = 'active';
        $ticket->save();

        $ticket = new Ticket();
        $ticket->user_id = '2';
        $ticket->code = 'tk-0006';
        $ticket->description = 'Ticket de prueba número seis';
        $ticket->status = 'active';
        $ticket->save();

        $ticket = new Ticket();
        $ticket->user_id = '2';
        $ticket->code = 'tk-0007';
        $ticket->description = 'Ticket de prueba número siete';
        $ticket->status = 'closed';
        $ticket->save();

        $ticket = new Ticket();
        $ticket->user_id = '2';
        $ticket->code = 'tk-0008';
        $ticket->description = 'Ticket de prueba número ocho';
        $ticket->status = 'closed';
        $ticket->save();
    }
}
