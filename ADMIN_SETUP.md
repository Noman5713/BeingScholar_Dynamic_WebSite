# BeingScholar Admin Panel Setup Guide 🚀

## Quick Setup

### 1. Database Setup
```bash
# Run migrations to create database tables
php artisan migrate

# Seed the database with admin user and sample data
php artisan db:seed --class=AdminUserSeeder
```

### 2. Admin Login Credentials
- **Email**: `admin@beingscholar.com`
- **Password**: `password`

### 3. Start the Server
```bash
php artisan serve
```

### 4. Access Admin Panel
Visit: `http://localhost:8000/admin/login`

---

## Admin Features ✅

### 🔐 Authentication
- **Login/Logout**: Fully functional
- **Session Management**: Secure admin sessions
- **Role-based Access**: Only admins can access

### 📊 Dashboard
- **Statistics Overview**: Users, Courses, Enrollments, Revenue
- **Recent Activity**: Latest users and courses
- **Quick Navigation**: Sidebar menu

### 📚 Course Management
- **View All Courses**: Paginated list with search
- **Add New Course**: Complete form with validation
- **Edit Course**: Update all course details
- **Delete Course**: Remove courses permanently
- **Status Management**: Active/Draft/Archived

### 👥 User Management
- **View All Users**: Paginated list with search
- **Edit Users**: Update name, email, role
- **Change Passwords**: Optional password updates
- **Delete Users**: Remove users permanently
- **Role Management**: Admin/Student roles

### 🗂 My Courses
- **Personal Course View**: Admin's own courses
- **Course Statistics**: Performance metrics

---

## File Structure 📁

```
resources/views/admin/
├── login.blade.php              # Admin login page
├── dashboard.blade.php          # Main dashboard
├── manage-courses.blade.php     # Course listing & management
├── manage-users.blade.php       # User listing & management
├── mycourses.blade.php          # Admin's personal courses
└── courses/
    ├── create.blade.php         # Add new course form
    └── edit.blade.php           # Edit course form
└── users/
    └── edit.blade.php           # Edit user form
```

---

## Routes 🔗

### Admin Routes
- `GET /admin/login` - Login page
- `POST /admin/login` - Process login
- `POST /admin/logout` - Process logout
- `GET /admin/dashboard` - Main dashboard
- `GET /admin/manage-courses` - Course management
- `GET /admin/courses/create` - Create course form
- `POST /admin/courses` - Store new course
- `GET /admin/courses/{id}/edit` - Edit course form
- `PUT /admin/courses/{id}` - Update course
- `DELETE /admin/courses/{id}` - Delete course
- `GET /admin/users` - User management
- `GET /admin/users/{id}/edit` - Edit user form
- `PUT /admin/users/{id}` - Update user
- `DELETE /admin/users/{id}` - Delete user
- `GET /admin/mycourses` - Admin's courses

---

## Database Tables 🗄️

### Users Table
- `id` - Primary key
- `name` - Full name
- `email` - Email address
- `password` - Hashed password
- `role` - 'admin' or 'student'
- `email_verified_at` - Email verification timestamp
- `created_at`, `updated_at` - Timestamps

### Courses Table
- `id` - Primary key
- `title` - Course title
- `description` - Course description
- `instructor` - Instructor name
- `duration` - Course duration
- `level` - Difficulty level
- `prerequisites` - Course requirements
- `price` - Course price
- `banner_image` - Course image path
- `status` - 'active', 'draft', or 'archived'
- `max_students` - Maximum students allowed
- `start_date`, `end_date` - Course dates
- `batch_number` - Batch identifier
- `created_at`, `updated_at` - Timestamps

---

## Security Features 🔒

### Authentication
- **CSRF Protection**: All forms protected
- **Password Hashing**: Secure password storage
- **Session Security**: Secure session management
- **Role Verification**: Admin middleware protection

### Validation
- **Input Validation**: All form inputs validated
- **Email Uniqueness**: Prevent duplicate emails
- **Password Confirmation**: Password change verification
- **Required Fields**: Essential data validation

---

## Troubleshooting 🔧

### Common Issues

#### 1. Login Not Working
- Check if admin user exists: `php artisan tinker`
- Create admin: `User::create(['name' => 'Admin', 'email' => 'admin@test.com', 'password' => Hash::make('password'), 'role' => 'admin'])`

#### 2. Database Errors
- Run migrations: `php artisan migrate:fresh`
- Seed data: `php artisan db:seed --class=AdminUserSeeder`

#### 3. Permission Issues
- Check file permissions: `chmod -R 755 storage/`
- Clear cache: `php artisan cache:clear`

#### 4. Route Not Found
- Clear route cache: `php artisan route:clear`
- Check route list: `php artisan route:list`

---

## Development Commands 🛠️

```bash
# Start development server
php artisan serve

# Run migrations
php artisan migrate

# Seed database
php artisan db:seed

# Clear all caches
php artisan optimize:clear

# View all routes
php artisan route:list

# Create new controller
php artisan make:controller AdminController

# Create new model
php artisan make:model Course

# Create new migration
php artisan make:migration create_courses_table
```

---

## Testing the Admin Panel 🧪

### 1. Login Test
- Visit `/admin/login`
- Use credentials: `admin@beingscholar.com` / `password`
- Should redirect to dashboard

### 2. Course Management Test
- Go to "Manage Courses"
- Click "Add New Course"
- Fill form and submit
- Edit existing course
- Delete a course

### 3. User Management Test
- Go to "Manage Users"
- Edit a user's details
- Change user role
- Delete a user

### 4. Logout Test
- Click logout button
- Should redirect to login page

---

## Customization 🎨

### Styling
- All styles are inline in each view
- Color scheme: Blue gradient theme
- Font: Inter (Google Fonts)
- Responsive design included

### Adding Features
1. Add route in `routes/web.php`
2. Add method in `AdminController.php`
3. Create view in `resources/views/admin/`
4. Update navigation if needed

---

## Support 📞

If you encounter issues:
1. Check Laravel logs: `storage/logs/laravel.log`
2. Verify database connection
3. Ensure all migrations are run
4. Check file permissions

**Admin Panel is now fully functional! 🎉** 