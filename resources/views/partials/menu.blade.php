<ul class="list-group col col-3">
    <a href="{{ route('home') }}" class="list-group-item list-group-item-action {{ Request::is('home*') ? 'active' : '' }}">Home</a>
    <a href="{{ route('reciever.index') }}" class="list-group-item list-group-item-action {{ Request::is('reciever*') ? 'active' : '' }}">Ontvanger</a>
    <a href="{{ route('mail.index') }}" class="list-group-item list-group-item-action {{ Request::is('mail*') ? 'active' : '' }}">Mail</a>
</ul>
