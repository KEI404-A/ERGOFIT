<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Development Team - SMK N 2 Surakarta | ERGOFIT</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #6366f1;
            --accent-color: #10b981;
            --text-dark: #1e293b;
            --text-light: #64748b;
            --border-radius: 20px;
            --shadow-medium: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf3 100%);
            min-height: 100vh;
            padding: 40px 0;
        }
        
        .page-header {
            text-align: center;
            margin-bottom: 60px;
            padding: 40px 20px;
        }
        
        .page-header h1 {
            color: var(--text-dark);
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 15px;
        }
        
        .page-header p {
            color: var(--text-light);
            font-size: 1.1rem;
        }
        
        .team-card {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-medium);
            padding: 40px 30px;
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(99, 102, 241, 0.2);
        }
        
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 25px;
            display: block;
            border: 5px solid #f1f5f9;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        
        .team-card h3 {
            color: var(--text-dark);
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 10px;
            text-align: center;
        }
        
        .role {
            color: var(--primary-color);
            font-weight: 600;
            text-align: center;
            margin-bottom: 15px;
            font-size: 1rem;
        }
        
        .bio {
            color: var(--text-light);
            text-align: center;
            line-height: 1.8;
            margin-bottom: 25px;
        }
        
        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-bottom: 25px;
        }
        
        .skill-badge {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-links a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-dark);
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .social-links a:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-3px);
        }
        
        .back-button {
            display: inline-block;
            margin: 0 auto 40px;
            padding: 12px 30px;
            background: var(--primary-color);
            color: white;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
            width: fit-content;
        }
        
        .back-button:hover {
            background: var(--accent-color);
            color: white;
            transform: translateX(-5px);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center mb-4">
            <a href="{{ route('ergofit') }}" class="back-button" style="margin: 0 auto;">
            <i class="bi bi-arrow-left"></i> Back to Home
        </a>
        </div>
        
        <div class="page-header">
            <img src="images/stemsa.png" alt="SMK N 2 Surakarta" style="width: 120px; margin-bottom: 20px;">
            <h1>Development Team</h1>
            <p>Meet the talented students from SMK N 2 Surakarta who built ERGOFIT</p>
        </div>
        
        <div class="row g-4">
            <!-- Developer 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <img src="images/FM.jpg" alt="Developer 1" class="profile-image">
                    <h3>FADHIL ANNAUFAL MUSYAFA</h3>
                    <p class="role">Full Stack Developer</p>
                    <p class="bio">
                        Passionate about creating innovative web solutions. Specializes in both frontend and backend development with a focus on user experience.
                    </p>
                    <div class="skills">
                        <span class="skill-badge">HTML/CSS</span>
                        <span class="skill-badge">JavaScript</span>
                        <span class="skill-badge">React</span>
                        <span class="skill-badge">Node.js</span>
                    </div>
                    <div class="social-links">
                        <a href="#" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="#" title="GitHub"><i class="bi bi-github"></i></a>
                        <a href="#" title="Email"><i class="bi bi-envelope"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Developer 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <img src="images/MAY.jpg" alt="Developer 2" class="profile-image">
                    <h3>MAYJESTY AMERTHA SARI</h3>
                    <p class="role">UI/UX Designer</p>
                    <p class="bio">
                        Creative designer with an eye for detail. Dedicated to crafting beautiful and intuitive user interfaces that enhance user engagement.
                    </p>
                    <div class="skills">
                        <span class="skill-badge">Figma</span>
                        <span class="skill-badge">Adobe XD</span>
                        <span class="skill-badge">UI Design</span>
                        <span class="skill-badge">Prototyping</span>
                    </div>
                    <div class="social-links">
                        <a href="#" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="#" title="Behance"><i class="bi bi-behance"></i></a>
                        <a href="#" title="Email"><i class="bi bi-envelope"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Developer 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <img src="images/THO.jpg" alt="Developer 3" class="profile-image">
                    <h3>MUHAMMAD ABDILLAH THOHA</h3>
                    <p class="role">Backend Developer</p>
                    <p class="bio">
                        Expert in server-side development and database management. Ensures robust and scalable backend architecture for optimal performance.
                    </p>
                    <div class="skills">
                        <span class="skill-badge">Python</span>
                        <span class="skill-badge">MySQL</span>
                        <span class="skill-badge">API Design</span>
                        <span class="skill-badge">Cloud</span>
                    </div>
                    <div class="social-links">
                        <a href="#" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="#" title="GitHub"><i class="bi bi-github"></i></a>
                        <a href="#" title="Email"><i class="bi bi-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>