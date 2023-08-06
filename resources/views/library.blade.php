<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UHUB</title>
    <link rel="shortcut icon" href="storage/images/uhub-logo.png" type="image/x-icon">
    {{-- tailwind --}}
    @vite('resources/css/app.css')

    {{-- Lato font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <style>
        .font-lato {
            font-family: 'Lato', sans-serif;
        }
    </style>

</head>

<body class="font-lato">
    <header>
        {{-- nav bar --}}
        <nav class="">
            <div class="navbar bg-gray-800 text-white font-medium">
                <div class="flex-1">
                    {{-- <a class="btn btn-ghost normal-case text-4xl font-bold text-orange-500">UHUB</a> --}}
                    <img class="w-48" src="storage/images/uhub-logo.png" alt="">
                </div>
                <div class="list-none">
                    <li class="pr-4"><a href="">Dashboard</a></li>
                    <li class="pr-4"><a href="">Library</a></li>
                    <li class="pr-4"><a href="">Staff Info</a></li>
                    <li class="pr-4"><a href="">Scholarly Works</a></li>
                    <li class="pr-4"><a href="">Counselling</a></li>
                    <li class="pr-4"><a href="">Club Archive</a></li>
                </div>
                <div class="flex-none gap-2">
                    {{-- search bar --}}
                    {{-- <div class="form-control">
                        <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
                    </div> --}}

                    <div class="dropdown dropdown-end text-black">
                        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full">
                                <img src="storage/images/profile-pic.jpg" />
                            </div>
                        </label>
                        <ul tabindex="0"
                            class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                            <li>
                                <a class="justify-between">
                                    Profile
                                    {{-- <span class="badge">New</span> --}}
                                </a>
                            </li>
                            <li><a>Settings</a></li>
                            <li><a>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        {{-- available books --}}
        <section>
            <div class="flex justify-center">
                {{-- sidebar --}}
                <div class="drawer lg:drawer-open">

                    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
                    {{-- <div class="drawer-content flex flex-col items-center justify-center">
                        <!-- Page content here -->
                        <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>

                    </div> --}}
                    <div class="drawer-side">
                        <label for="my-drawer-2" class="drawer-overlay"></label>
                        <ul class="menu p-4 w-60 h-full bg-base-200 text-base-content">
                            <!-- Sidebar content here -->
                            <div class="">
                                <input type="text" placeholder="Search" class="input input-bordered border-orange-500 border-2 h-10 w-24 md:w-auto" />
                            </div>
                            <div class="text-orange-500 font-medium text-xl mt-4">
                                <li><a href="">CSE</a></li>
                                <li><a href="">EEE</a></li>
                                <li><a href="">BBA</a></li>
                                <li><a href="">CIVIL</a></li>
                                <li><a href="">EDS</a></li>
                            </div>
                        </ul>

                    </div>
                </div>

                {{-- cards --}}
                <div class="grid grid-cols-4 gap-12 m-1">
                    {{-- card 1 --}}


                    {{-- modal --}}
                    <!-- Open the modal using ID.showModal() method -->
                    <button class="" onclick="my_modal_1.showModal()">
                        <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                            <figure><img src="storage/images/book1.png" alt="Intro to Algorithms" /></figure>
                            <div class="card-body">
                                <h2 class="card-title font-me">Intro to Algorithms</h2>
                                <p class="text-sm font-reguler text-left">Shelf 3 : Row 5</p>
                            </div>
                        </div>
                    </button>
                    <dialog id="my_modal_1" class="modal">
                        <form method="dialog" class="modal-box max-w-[50%]">
                            <div class="flex justify-around items-center">
                                <img class="w-56" src="storage/images/book1.png" alt="Intro to Algorithms" /></figure>
                                <div class="card-body">
                                    <h2 class="card-title font-me">Introduction to Algorithms</h2>
                                    <p class="text-sm">Introduction to Algorithms is a book on computer programming by
                                        Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, and Clifford Stein.
                                        The book has been widely used as the textbook for algorithms courses at many
                                        universities[1] and is commonly cited as a reference for algorithms in published
                                        papers, with over 10,000 citations documented on CiteSeerX.</p>
                                    <button
                                        class="btn btn-warning text-white bg-orange-500 mt-8 w-[50%]">Requisition</button>
                                </div>
                                <div class="modal-action">
                                    <!-- if there is a button in form, it will close the modal -->
                                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                </div>
                        </form>
                    </dialog>

                    <button class="" onclick="my_modal_2.showModal()">
                        <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                            <figure><img src="storage/images/book2.png" alt="Core JAVA" /></figure>
                            <div class="card-body">
                                <h2 class="card-title font-me">Core JAVA</h2>
                                <p class="text-sm font-reguler text-left">Shelf 3 : Row 6</p>
                            </div>
                        </div>
                    </button>
                    <dialog id="my_modal_2" class="modal">
                        <form method="dialog" class="modal-box max-w-[50%]">
                            <div class="flex justify-around items-center">
                                <img class="w-56" src="storage/images/book2.png" alt="Core JAVA" /></figure>
                                <div class="card-body">
                                    <h2 class="card-title font-me">Core JAVA</h2>
                                    <p class="text-sm">Introduction to Algorithms is a book on computer programming by
                                        Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, and Clifford Stein.
                                        The book has been widely used as the textbook for algorithms courses at many
                                        universities[1] and is commonly cited as a reference for algorithms in published
                                        papers, with over 10,000 citations documented on CiteSeerX.</p>
                                    <button
                                        class="btn btn-warning text-white bg-orange-500 mt-8 w-[50%]">Requisition</button>
                                </div>
                                <div class="modal-action">
                                    <!-- if there is a button in form, it will close the modal -->
                                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                </div>
                        </form>
                    </dialog>

                    <button class="" onclick="my_modal_3.showModal()">
                        <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                            <figure><img src="storage/images/book3.png" alt="OOP" /></figure>
                            <div class="card-body">
                                <h2 class="card-title font-me">OOP</h2>
                                <p class="text-sm font-reguler text-left">Shelf 3 : Row 4</p>
                            </div>
                        </div>
                    </button>
                    <dialog id="my_modal_3" class="modal">
                        <form method="dialog" class="modal-box max-w-[50%]">
                            <div class="flex justify-around items-center">
                                <img class="w-56" src="storage/images/book3.png" alt="OOP" /></figure>
                                <div class="card-body">
                                    <h2 class="card-title font-me">OOP</h2>
                                    <p class="text-sm">Introduction to Algorithms is a book on computer programming by
                                        Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, and Clifford Stein.
                                        The book has been widely used as the textbook for algorithms courses at many
                                        universities[1] and is commonly cited as a reference for algorithms in published
                                        papers, with over 10,000 citations documented on CiteSeerX.</p>
                                    <button
                                        class="btn btn-warning text-white bg-orange-500 mt-8 w-[50%]">Requisition</button>
                                </div>
                                <div class="modal-action">
                                    <!-- if there is a button in form, it will close the modal -->
                                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                </div>
                        </form>
                    </dialog>

                    <button class="" onclick="my_modal_4.showModal()">
                        <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                            <figure><img src="storage/images/book4.png" alt="OOP" /></figure>
                            <div class="card-body">
                                <h2 class="card-title font-me">Intro to Algorithms</h2>
                                <p class="text-sm font-reguler text-left">Shelf 3 : Row 5</p>
                            </div>
                        </div>
                    </button>
                    <dialog id="my_modal_4" class="modal">
                        <form method="dialog" class="modal-box max-w-[50%]">
                            <div class="flex justify-around items-center">
                                <img class="w-56" src="storage/images/book4.png" alt="Intro to Algorithms" />
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title font-me">Introduction to Algorithms</h2>
                                    <p class="text-sm">Introduction to Algorithms is a book on computer programming by
                                        Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, and Clifford Stein.
                                        The book has been widely used as the textbook for algorithms courses at many
                                        universities[1] and is commonly cited as a reference for algorithms in published
                                        papers, with over 10,000 citations documented on CiteSeerX.</p>
                                    <button
                                        class="btn btn-warning text-white bg-orange-500 mt-8 w-[50%]">Requisition</button>
                                </div>
                                <div class="modal-action">
                                    <!-- if there is a button in form, it will close the modal -->
                                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                </div>
                        </form>
                    </dialog>

                    <button class="" onclick="my_modal_5.showModal()">
                        <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                            <figure><img src="storage/images/book1.png" alt="Intro to Algorithms" /></figure>
                            <div class="card-body">
                                <h2 class="card-title font-me">Intro to Algorithms</h2>
                                <p class="text-sm font-reguler text-left">Shelf 3 : Row 5</p>
                            </div>
                        </div>
                    </button>
                    <dialog id="my_modal_5" class="modal">
                        <form method="dialog" class="modal-box max-w-[50%]">
                            <div class="flex justify-around items-center">
                                <img class="w-56" src="storage/images/book1.png" alt="Intro to Algorithms" />
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title font-me">Introduction to Algorithms</h2>
                                    <p class="text-sm">Introduction to Algorithms is a book on computer programming by
                                        Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, and Clifford Stein.
                                        The book has been widely used as the textbook for algorithms courses at many
                                        universities[1] and is commonly cited as a reference for algorithms in published
                                        papers, with over 10,000 citations documented on CiteSeerX.</p>
                                    <button
                                        class="btn btn-warning text-white bg-orange-500 mt-8 w-[50%]">Requisition</button>
                                </div>
                                <div class="modal-action">
                                    <!-- if there is a button in form, it will close the modal -->
                                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                </div>
                        </form>
                    </dialog>
                    <button class="" onclick="my_modal_6.showModal()">
                        <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                            <figure><img src="storage/images/book2.png" alt="Core JAVA" /></figure>
                            <div class="card-body">
                                <h2 class="card-title font-me">Core JAVA</h2>
                                <p class="text-sm font-reguler text-left">Shelf 3 : Row 6</p>
                            </div>
                        </div>
                    </button>

                    <dialog id="my_modal_6" class="modal">
                        <form method="dialog" class="modal-box max-w-[50%]">
                            <div class="flex justify-around items-center">
                                <img class="w-56" src="storage/images/book2.png" alt="Core JAVA" /></figure>
                                <div class="card-body">
                                    <h2 class="card-title font-me">Core JAVA</h2>
                                    <p class="text-sm">Introduction to Algorithms is a book on computer programming by
                                        Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, and Clifford Stein.
                                        The book has been widely used as the textbook for algorithms courses at many
                                        universities[1] and is commonly cited as a reference for algorithms in published
                                        papers, with over 10,000 citations documented on CiteSeerX.</p>
                                    <button
                                        class="btn btn-warning text-white bg-orange-500 mt-8 w-[50%]">Requisition</button>
                                </div>
                                <div class="modal-action">
                                    <!-- if there is a button in form, it will close the modal -->
                                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                </div>
                        </form>
                    </dialog>

                    <button class="" onclick="my_modal_7.showModal()">
                        <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                            <figure><img src="storage/images/book3.png" alt="OOP" /></figure>
                            <div class="card-body">
                                <h2 class="card-title font-me">OOP</h2>
                                <p class="text-sm font-reguler text-left">Shelf 3 : Row 4</p>
                            </div>
                        </div>
                    </button>
                    <dialog id="my_modal_7" class="modal">
                        <form method="dialog" class="modal-box max-w-[50%]">
                            <div class="flex justify-around items-center">
                                <img class="w-56" src="storage/images/book3.png" alt="OOP" /></figure>
                                <div class="card-body">
                                    <h2 class="card-title font-me">OOP</h2>
                                    <p class="text-sm">Introduction to Algorithms is a book on computer programming by
                                        Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, and Clifford Stein.
                                        The book has been widely used as the textbook for algorithms courses at many
                                        universities[1] and is commonly cited as a reference for algorithms in published
                                        papers, with over 10,000 citations documented on CiteSeerX.</p>
                                    <button
                                        class="btn btn-warning text-white bg-orange-500 mt-8 w-[50%]">Requisition</button>
                                </div>
                                <div class="modal-action">
                                    <!-- if there is a button in form, it will close the modal -->
                                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                </div>
                        </form>
                    </dialog>

                    <button class="" onclick="my_modal_8.showModal()">
                        <div class="card card-compact  bg-base-100 shadow-orange-500 shadow-sm">
                            <figure><img src="storage/images/book4.png" alt="OOP" /></figure>
                            <div class="card-body">
                                <h2 class="card-title font-me">Intro to Algorithms</h2>
                                <p class="text-sm font-reguler text-left">Shelf 3 : Row 5</p>
                            </div>
                        </div>
                    </button>
                    <dialog id="my_modal_8" class="modal">
                        <form method="dialog" class="modal-box max-w-[50%]">
                            <div class="flex justify-around items-center">
                                <img class="w-56" src="storage/images/book4.png" alt="Intro to Algorithms" />
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title font-me">Introduction to Algorithms</h2>
                                    <p class="text-sm">Introduction to Algorithms is a book on computer programming by
                                        Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, and Clifford Stein.
                                        The book has been widely used as the textbook for algorithms courses at many
                                        universities[1] and is commonly cited as a reference for algorithms in published
                                        papers, with over 10,000 citations documented on CiteSeerX.</p>
                                    <button
                                        class="btn btn-warning text-white bg-orange-500 mt-8 w-[50%]">Requisition</button>
                                </div>
                                <div class="modal-action">
                                    <!-- if there is a button in form, it will close the modal -->
                                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                </div>
                        </form>
                    </dialog>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer footer-center p-10 bg-gray-800 text-white rounded">
        <div class="grid grid-flow-col gap-4">
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Jobs</a>
            <a class="link link-hover">Press kit</a>
        </div>
        <div>
            <div class="grid grid-flow-col gap-4">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                        </path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                        </path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                        </path>
                    </svg></a>
            </div>
        </div>
        <div>
            <p>Copyright © 2023 - All right reserved by Team Rootkit</p>
        </div>
    </footer>
</body>

</html>