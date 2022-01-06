@foreach($emails as $email)
    {{ 'Id: ' . $email->id . ' Email: ' . $email->email }} <br />
@endforeach