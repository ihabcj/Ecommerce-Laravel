@foreach($contacts as $contact)

<h1> {{ $contact->name }} </h1>

<h1> {{ $contact->email }} </h1>

<h1> {{ $contact->subject }} </h1>

@endforeach