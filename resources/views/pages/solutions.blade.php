@extends('layouts.app')

@section('content')
<section class="solutions-section">
    <div class="container">
        <div class="solutions-header text-center">
            <img src="{{ asset('images/solutions/frame.svg') }}" >
            <h1>Solutions</h1>
        </div>
        <div class="description text-center">
            <p>At GlobalOutsourcingPartners, we specialize in providing customized solutions to meet the unique requirements of each client. Our flexible approach ensures that businesses receive the exact support they need, whether it’s hiring our in-house team or having us manage a dedicated team tailored to their needs.</p>
        </div>
        <div class="solutions-content features d-flex justify-content-between">
            <div class="feature-box text-center">
                <img src="{{ asset('images/solutions/image1.png') }}" alt="Customized Teams" class="feature-image" style="width: 100%; max-width: 300px;">
                <h4>Customized Teams</h4>
                <ul class="text-left">
                    <li>Hire our highly trained in-house professionals to handle your specific business functions.</li>
                    <li>Choose from a pool of experts with skills tailored to your industry and project demands.</li>
                </ul>
            </div>
            <div class="feature-box text-center">
                <img src="{{ asset('images/solutions/image2.png') }}" alt="Remote Teams" class="feature-image" style="width: 100%; max-width: 300px;">
                <h4>Remote Teams</h4>
                <ul class="text-left">
                    <li>Let us build and manage a team exclusively for your projects.</li>
                    <li>We handle recruitment, training, and daily operations while ensuring seamless collaboration with your internal teams.</li>
                </ul>
            </div>
            <div class="feature-box text-center">
                <img src="{{ asset('images/solutions/image3.png') }}" alt="Training for Excellence" class="feature-image" style="width: 100%; max-width: 300px;">
                <h4>Training for Excellence</h4>
                <ul class="text-left">
                    <li>We train our in-house team to align with your business processes, ensuring they meet your exact requirements.</li>
                    <li>Gain the benefits of a well-trained workforce without the overhead of training costs or time commitments.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@include('components.why-choose-us')
@endsection
@section('footer')
    @include('components.footer') 
@endsection
