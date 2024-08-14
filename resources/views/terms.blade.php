@extends('layout.app')
@section('terms','Home')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.left_sidebar')
        </div>
        <div class="col-6">
            <h1>Terms :-</h1>
            <div>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent massa justo, laoreet nec convallis at,
                lobortis non odio. Mauris eu mi at libero posuere tincidunt. Vivamus volutpat ut enim ac laoreet. Cras
                ligula turpis, convallis molestie sagittis at, efficitur vehicula ligula. Aliquam erat volutpat. Cras nec
                eros non arcu iaculis placerat. Nulla non tellus nec ipsum condimentum dapibus. Pellentesque nec vulputate
                ligula. Pellentesque nisl lacus, pellentesque vel nibh ut, aliquet congue arcu.

                Nullam scelerisque porta justo ac efficitur. Ut posuere vitae sem quis egestas. In sagittis non leo sed
                tristique. Praesent maximus felis ex, vel dignissim libero vestibulum ac. Ut porttitor tincidunt lorem eget
                semper. Pellentesque varius venenatis vestibulum. In sed luctus ipsum.

                Donec sed porta dui, ultricies posuere arcu. Nam diam nisl, vestibulum ac accumsan eget, semper sit amet
                nunc. Aenean a lacinia nisi, ut blandit felis. Curabitur mattis non eros at mattis. Donec finibus consequat
                lorem ut sollicitudin. Sed id neque non turpis posuere dapibus lobortis at est. Donec varius nulla at
                aliquam fermentum. Sed condimentum ipsum dolor, vitae commodo lectus ultricies in.

                Integer risus mauris, tempor suscipit lorem suscipit, laoreet convallis leo. Vestibulum ante ipsum primis in
                faucibus orci luctus et ultrices posuere cubilia curae; Interdum et malesuada fames ac ante ipsum primis in
                faucibus. Phasellus gravida justo nec egestas suscipit. Proin vitae interdum enim. Nullam sapien mauris,
                pellentesque vehicula magna ac, volutpat eleifend leo. Quisque elit nisl, vulputate vel mi a, ultricies
                ullamcorper orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mattis eu nulla sit amet
                finibus.

                Phasellus fringilla nisl massa, a facilisis est lacinia ac. Nullam eu odio ipsum. Curabitur dignissim mauris
                a fringilla tempus. Phasellus lobortis tempor felis, in scelerisque leo mattis vel. Aliquam gravida dolor ac
                diam vestibulum ultrices. Sed in maximus arcu. Cras tortor tellus, porta ut urna eget, sagittis facilisis
                lorem. Cras pulvinar luctus urna a feugiat. Suspendisse convallis porta orci, quis dictum sapien volutpat
                et. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras commodo
                ipsum vel urna malesuada viverra. Aenean pellentesque efficitur consectetur. Nam ullamcorper dignissim lorem
                eu tristique.
            </div>
        </div>
        <div class="col-3">
            @include('shared.search_bar')
            @include('shared.follow_box')
        </div>
    </div>
@endsection
