<div style="font-family: sans-serif;">
    <h2>Message from Portfolio Site</h2>
    <p><span style="font-weight: bold">Name:</span> {{ $name }}</p>
    <p><span style="font-weight: bold">Email:</span> {{$email}}</p>
    @if($website != '')
    <p><span style="font-weight: bold">Website:</span> {{$website}}</p>
    @else
    <p><span style="font-weight: bold">Website:</span> Not provided</p>
    @endif
    @if($source != '')
    <p><span style="font-weight: bold">Source:</span> {{$source}}</p>
    @else
    <p><span style="font-weight: bold">Source:</span> Not provided</p>
    @endif
    <div>
        <span style="font-weight: bold">Message:</span> {{$body}}
    </div>
</div>