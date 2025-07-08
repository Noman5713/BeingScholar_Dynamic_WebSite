<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Student Dashboard</title>
</head>

<body class="bg-base-200 min-h-screen">

    <div class="flex min-h-screen">
        <aside class="w-64 bg-base-100 shadow-lg p-6 hidden md:block">
            <h2 class="text-2xl font-bold mb-8">Student Dashboard</h2>
            <ul class="menu">
                <li><a class="font-semibold" href="#overview">Overview</a></li>
                <li><a href="#courses">My Courses</a></li>

            </ul>
        </aside>
        <main class="flex-1 p-6">

            <div class="flex items-center justify-between mb-8">
                <h1 class="text-3xl font-bold">Dashboard</h1>
                <div class="flex items-center gap-4">
                    <h2 class="text-2xl font-bold">Uodoy</h2>

                    <div class="avatar">
                        <div class="w-24 rounded-full">
                            <img src="https://img.daisyui.com/images/profile/demo/yellingcat@192.webp" />
                        </div>
                    </div>
                </div>
            </div>


            <section id="overview" class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                <div class="card bg-primary text-primary-content shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title">Enrolled Courses</h2>
                        <p class="text-4xl font-bold">3</p>
                    </div>
                </div>
                <div class="card bg-accent text-accent-content shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title">Assignments Due</h2>
                        <p class="text-4xl font-bold">2</p>
                    </div>
                </div>
            </section>


            <section id="courses" class="mb-10">
                <h2 class="text-2xl font-bold mb-4">My Courses</h2>
                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <thead>
                            <tr>
                                <th>Course</th>
                                <th>Instructor</th>
                                <th>Status</th>
                                <th>Progress</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Professional Certificate in Java Spring boot and Web App Developnent</td>
                                <td>
                                    <p>Dr. Sheak Rashed Haider Noori</p>
                                    <p>Md Rezanur Rahman</p>
                                </td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td><progress class="progress progress-primary w-24" value="80" max="100"></progress>
                                </td>
                            </tr>
                            <tr>
                                <td>Applied Data Analytics Masterclass</td>
                                 <td>
                                    <p>Md. Zahid Hasan</p>
                                    <p>Sadat Hasan</p>
                                </td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td><progress class="progress progress-primary w-24" value="65" max="100"></progress>
                                </td>
                            </tr>
                            <tr>
                                <td>Academia2Industry Mern Stack Launched</td>
                                <td>
                                    <p>Md. Sadhan Sarkar</p>
                                    <p>MD. Khalid Hossen</p>
                                    <p>Md. Hannan Talukder</p>
                                </td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td><progress class="progress progress-primary w-24" value="40" max="100"></progress>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

        </main>
    </div>
</body>

</html>