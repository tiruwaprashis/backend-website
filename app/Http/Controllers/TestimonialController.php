<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        $staticTestimonials = [
            (object)[
                'content' => '“Donec et nunc massa. Nullam non felis dignissim, dapibus turpis semper, vulputate lorem. Nam volutpat posuere tellus, in porttitor justo interdum nec. Aenean in dapibus risus, in euismod ligula. Aliquam vel scelerisque elit.”',
                'author' => 'David Eigenberg',
                'position' => 'CEO of Mexant',
                'image' => 'assets/images/testimonials-01.jpg'
            ],
            (object)[
                'content' => '“Etiam id ligula risus. Fusce fringilla nisl nunc, nec rutrum lectus cursus nec. In blandit nibh dolor, at rutrum leo accumsan porta. Nullam pulvinar eros porttitor risus condimentum tempus.”',
                'author' => 'Andrew Garfield',
                'position' => 'CTO of Mexant',
                'image' => 'assets/images/testimonials-01.jpg'
            ],
            (object)[
                'content' => '“Ut dictum vehicula massa, ac pharetra leo tincidunt eu. Phasellus in tristique magna, ac gravida leo. Integer sed lorem sapien. Ut viverra mauris sed lobortis commodo.”',
                'author' => 'George Lopez',
                'position' => 'Crypto Manager',
                'image' => 'assets/images/testimonials-01.jpg'
            ]
        ];

        return view('frontend.home', compact('testimonials', 'staticTestimonials'));
    }
}
