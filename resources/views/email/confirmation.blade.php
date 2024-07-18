<div style="font-family: sans-serif;">
    <h2>Your Message Has Been Received</h2>
    <p>Thank you {{$name}} for reaching out to me. I follow back up with you soon.</p>
    <p>Please don't respond to this email as it is not monitored.</p>
    <p>Hunter Steffner</p>
    <div style="padding: 5px; background-color: rgb(250, 247, 247); color: #000;">
        <h3>Copy of message</h3>
        <div style="padding: 4px;">
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
    </div>
</div>