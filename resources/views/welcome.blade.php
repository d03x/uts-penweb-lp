@extends('layouts.app',['title'=>"Wellcome"])
@section('content')
     <!-- begin::hero -->
     <section id="hero" class="min-vh-100 d-flex text-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 id='typewriter' class="text-uppercase fw-semibold display-1 text-white"></h1>
                    <h5 class="mt-3 mb-4 text-white">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima sed, necessitatibus omnis perferendis iusto minus beatae veniam dicta quaerat, sapiente culpa sit repudiandae illo, eum odio! Placeat magni sunt nisi?
                    </h5>
                    <div>
                        <a href="" class="btn btn-brand me-3">Explore</a>
                        <a href="" class="btn btn-brand ms-3">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end::hero -->
    <!-- begin::about -->
    <section id="about">
        <div class="container pb-5">
            <div class="row">
               <div class="col-12 text-center">
                <div class="section-title">
                    <h1 class="display-h4 fw-semibold">About Me</h1>
                    <div class="line"></div>
                    <p>Kelompok 4</p>
                </div>
                <div class="row gap-6 gap-md-0">
                    <div class="col-md-4 col-12">
                        <div class="bg-white shadow profile_card rounded-lg">
                            <img width="50%" class="profile_card_image" src="https://avatars.githubusercontent.com/u/149863272?v=4" alt="">
                            <div class="px-3 pt-3 profile_card_summary pb-4">
                                <h5 class="display-7 fw-semibold">23110313</h5>
                                <h5 class="display-7">Dadan Hidayat</h5>
                                <h5 class="display-7 fw-semibold">TEKNIK INFORMATIKA</h5>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <img width="88%" src="{{ asset('1701313060-enuc1snQTO.jpg') }}" alt="">
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="bg-white shadow profile_card rounded-lg">
                            <img width="50%" class="profile_card_image" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAFwAXAMBIgACEQEDEQH/xAAcAAACAwEBAQEAAAAAAAAAAAAFBgIDBAcBAAj/xAA+EAACAQMCAwMJBAcJAAAAAAABAgMABBEFIQYSMUFRcQcTFCJhgZHB0SOCofAVMkJSYqKxFjNDU1RykrLh/8QAGwEAAgMBAQEAAAAAAAAAAAAAAgQBAwYFAAf/xAApEQACAgECBAQHAAAAAAAAAAAAAQIDEQQhBRIxMkFRcbETFCJSgaHB/9oADAMBAAIRAxEAPwBGr6vK+pU+mHud6Jx+sqnvAoWaJWZLRKaGRyuLRzUn5M+vtRstNjU3cnKzfqqNyfdQWbi+BT9haSOP42C/WgnE83ntZn3yEwg9w+uaFVbCmOMsyNmolzNRG+LjMA+vYkD+GXPyopp/EthfSLFzNDKxwFkGAT3ZrnlSUlSGU4I3BonRBgrUTXU62V5hUTHtuKssnWe1imXdZEVx7xmr2UEdKRew71BsyhRtWbA7xRSWDmGwrP6KT2VGTwv5r0VEGvVpk2yZ45ojpxzGRnoc/n4ULlNENIZfWEmOUoc57qh9BLXLnpmvyJQt7jU76U20bSNI5b4mjtp5PeI7tOaG0jI9syitWlWUmn2lw8Q83OJyoY78qg7U6aPq97ZLHcRai9ygPLJDLZNEM7dGx7avc2uhjIUp9wknyYcVheYWEbD2XCfWhGscJa9osJm1LTZYoh1kBVlHvBNdw17XL7TBbsksFqJow5llQui9+QKw67Ne6ro98t2bWVBAZEmtWJVsbkEdhoVawpaeK2QscIsJ+HbJz1CFD90kfKi5jodwxEtto1unKV5iz4PtYmicjgUnPvZdX2oisdVtECelWpIrDFRJIO1AwmIoNSU1XmpKabNjGRCY1r01hzqrDKnKkHtB2rFMausmxg929eKZLmco+aYzaY8MN0yTKHidh2fnuph1M2wt44rXLcxGULk4UdvspV5wsqMxwp2ONsfnep+moJxDd2L3ETEcpxsxqV9W5lE8HVDb2c+m2oklBXlUCVGxhuzP/tR1i3to9MmVQGnlj5OYgZbO2+KD6bd6fZ2QP6GuYiyFSfMlhy4yRtV93qUVjZW803NMAxCjO52OPlQS2D9QFrzoNQZVBGEXmU/snHShpfIql5mfmdySzHJJ7TVYlBqkFvc0Akbirg5wOlZVYkVNHwu9QyCPlI4eGl6kNRtExZXjEkDpHJ1I8D1Hv7qTgdq73qthBq+nXGn3X93MuA3ajdjDwNcK1Gzm0y9uLO8HJLA5V89PEewjf30/dDle3idXhOu+LXyTe8fYyynarLTtFYJ76IErGC59nSsj3VychW5F7l+tRGqTDt4pRTPOeb0HrRITrsOqW9kPOXVnFFIijq2558d+MD8ar02W1kQwXrNGUPQ9RQnybat+heLrOZ2xBPm3mz+63Q+5gpruXEHAGl8Qc10rG1vTuZkGz/7h2+Oxq2VKUdjOfM5sba6i5oL2VnEUs7uSd2HqqTk+6hXFkU9nLZi5f1Z4mkjTuw2D8vjTXw7pun6RNFYT3lmszty80cqsXPu3GcduPlS/5fYjHLoBtg0ZWOdFZTj/AC9qXjU5l99rhjYVzNkYqIbBpatNUuVwsxVznHrbfjRKLUEk/XBQ95O1RKicfACN8WHY5VAwTVgZT0NDYcsRjcHtFaV5kGCKXawXJj3xlxGnDeiy3vKrzEiOCNujOe/2AAk+FcO1XUtQ4hv2vtUuDLK2BkKFAA6AAdgpr8sWpGbV7TTlP2dvF51gP33P0H40mWR9Ur24yK7L6nKTwTEAUbVERBnIyRtnxrSDzLmosmenUdKkgzgckisu2D1r9KaNfT8UcCxtYXJgubiDzEsy9YmxhyPb1wfaDX5vIDjPb2iuv+QfW+We80SZvVlXz8IJ/aGAw94wfumhl0JWzyDdK0K7t9dl4ZuX+084qCVR1jO/MPby599MHlfsJo+FNIkvWDz2twIS4OeYEHfxworDNemLym6hdtnzcV0gPgnKD/SmHy4YbhK2cEEemx4PiDStGFJ4O5xids66XP7f34/w4o9sFKyvEw5uhKkBvDvqWBii89xFLwpbwux9It79wqntjZM5HgQPiKDM21NxeUcWyKjLC6E7a49FuY+VyEY4YZ23IHzo+wJO9JV5N6rkHcED5/SnNJPORo46MoNI6uKymMaaTw0K3Hk5uOMNUfOeWUJ/xUL8qG2p5QGFXcRnPEeqk/62b/uaptt4z408Kl0EnrMvcTV1D4mPpD+NEB0qTxTcfZ/aDp+1juo7wbq36H4g0/UlOFgmDOf4Ds/8pag7gMpB7qo0l2Ezx5yqnaoZ46jfMP7V6q4OQbuTB7/WNGPKNfC58mulhjmQXqRH7ob5AUocPSNIheQlm5scx3NauL5pH4ZgjZsourqAO7MLE/0pCja5o1XFIqfD65+WPYWZriQW3o2QYi/nMY7cYrFK+ATX15IyEY7s1guZGYDmOafMqZ5G5gST1Yn8/CnTSW85plq/aYlz8KSP8OnPQGJ0a1z+6R/MaV1PahjTdzP/2Q==" alt="">
                            <div class="px-3 pt-3 profile_card_summary pb-4">
                                <h5 class="display-7 fw-semibold">23110313</h5>
                                <h5 class="display-7">Dadan Hidayat</h5>
                                <h5 class="display-7 fw-semibold">TEKNIK INFORMATIKA</h5>
                                
                            </div>
                        </div>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>
    <!-- end::about -->
@endsection