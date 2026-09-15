<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>CvSU Naic Campus - Laboratory Science High School</title>

  <meta name="description" content="CvSU Naic Campus - Laboratory Science High School, a public academic community committed to excellence in instruction, research, and student development." />
  <meta name="keywords" content="CvSU Naic, Cavite State University, Naic Campus, LSHS, Laboratory Science High School, education Cavite" />
  <meta name="author" content="CvSU Naic" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

      <style>

        @font-face {

          font-family: 'Aptos';

          src: url('{{ asset('fonts/Aptos.ttf') }}') format('truetype');

          font-weight: 400;

        }

        @font-face {

          font-family: 'Aptos';

          src: url('{{ asset('fonts/Aptos-Bold.ttf') }}') format('truetype');

          font-weight: 700;

        }

        :root {

          --cvsu-green: #0a4d00;

          --cvsu-gold: #e8c547;

          --muted: #6b7280;

          --surface: #ffffff;

          --surface-soft: #f3f8ef;

          --card-radius: 14px;

        }

        body {

          font-family: Aptos, "Segoe UI", system-ui, sans-serif;

          background: #f6f7f9;

          color: #0b1220;

          -webkit-font-smoothing: antialiased;

          -moz-osx-font-smoothing: grayscale;

        }

        html {

        scroll-behavior: smooth;

        scroll-padding-top: 90px;

    }

    section[id],

    #school-information {

        scroll-margin-top: 90px;

    }

        .navbar {

        position: fixed;

        top: 0;

        left: 0;

        width: 100%;

        z-index: 1030;

        background: transparent !important;

        box-shadow: none;

        transition:

            background-color 0.3s ease,

            box-shadow 0.3s ease,

            backdrop-filter 0.3s ease,

            padding 0.3s ease;

    }

    .navbar .navbar-brand,

    .navbar .nav-link {

        color: #fff !important;

    }

    .navbar .navbar-brand {

        transition: color 0.3s ease;

    }

    .navbar .nav-link {

        font-weight: 500;

    }

    .navbar .nav-link:hover,
.navbar .nav-link.active {
    background: rgba(10, 77, 0, 0.07);
    color: var(--cvsu-green) !important;
}

    .navbar.scrolled {

        background: rgba(250, 251, 248, 0.97) !important;

        backdrop-filter: blur(12px);

        -webkit-backdrop-filter: blur(12px);

        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);

    }

    .navbar.scrolled .navbar-brand,

    .navbar.scrolled .nav-link {

        color: #152019 !important;

    }

    .navbar.scrolled .nav-link:hover,

    .navbar.scrolled .nav-link.active {

        color: var(--cvsu-green) !important;

    }

    /* Mobile navbar */

    .navbar-toggler {

        border: 1px solid rgba(255, 255, 255, 0.35);

        padding: 7px 9px;

        border-radius: 8px;

        box-shadow: none !important;

    }

    .navbar.scrolled .navbar-toggler {

        border-color: rgba(10, 77, 0, 0.2);

    }

    /* Dark hamburger when navbar becomes light */

    .navbar.scrolled .navbar-toggler-icon {

        filter: invert(1);

    }

        .dropdown-menu {

          border-radius: 10px;

          min-width: 220px;

        }

        .dropdown-item:hover {

          background: rgba(10, 77, 0, 0.06);

        }

        .hero {

        position: relative;

        min-height: 100vh;

        display: flex;

        align-items: center;

        color: #fff;

        overflow: hidden;

        background:

            url('{{ asset("images/IMG_1164.jpg") }}')

            center center / cover no-repeat;

    }

    .hero::before {

        content: "";

        position: absolute;

        inset: 0;

        background:

            linear-gradient(

                90deg,

                rgba(4, 28, 8, 0.88) 0%,

                rgba(6, 55, 15, 0.70) 40%,

                rgba(4, 20, 8, 0.34) 100%

            );

        z-index: 1;

    }

    .hero .container {

        position: relative;

        z-index: 2;

    }

    .hero-content {

        max-width: 720px;

    }

    .hero-eyebrow {

        display: inline-flex;

        align-items: center;

        gap: 8px;

        margin-bottom: 1.25rem;

        font-size: 0.85rem;

        font-weight: 700;

        letter-spacing: 0.13em;

        text-transform: uppercase;

        color: var(--cvsu-gold);

    }

    .hero h1 {

        font-size: clamp(2.6rem, 6vw, 5.4rem);

        line-height: 0.98;

        font-weight: 800;

        letter-spacing: -0.04em;

        color: #fff;

        margin-bottom: 1.5rem;

        text-shadow: 0 3px 18px rgba(0, 0, 0, 0.28);

    }

    .hero-description {

        max-width: 650px;

        font-size: 1.1rem;

        line-height: 1.8;

        color: rgba(255, 255, 255, 0.86);

        margin-bottom: 2rem;

    }

    .hero-actions {

        display: flex;

        flex-wrap: wrap;

        gap: 12px;

    }

    .hero-btn-primary {

        display: inline-flex;

        align-items: center;

        gap: 8px;

        padding: 13px 21px;

        border: 1px solid var(--cvsu-gold);

        border-radius: 8px;

        background: var(--cvsu-gold);

        color: #152019;

        font-weight: 700;

        text-decoration: none;

        transition:

            transform 0.2s ease,

            background-color 0.2s ease;

    }

    .hero-btn-primary:hover {

        transform: translateY(-2px);

        background: #f3d663;

        color: #152019;

    }

    .hero-btn-secondary {

        display: inline-flex;

        align-items: center;

        gap: 8px;

        padding: 13px 21px;

        border: 1px solid rgba(255, 255, 255, 0.45);

        border-radius: 8px;

        background: rgba(255, 255, 255, 0.08);

        color: #fff;

        text-decoration: none;

        font-weight: 600;

        backdrop-filter: blur(8px);

        transition:

            transform 0.2s ease,

            background-color 0.2s ease;

    }

    .hero-btn-secondary:hover {

        transform: translateY(-2px);

        background: rgba(255, 255, 255, 0.16);

        color: #fff;

    }

    .hero-scroll {

        position: absolute;

        left: 50%;

        bottom: 28px;

        transform: translateX(-50%);

        color: rgba(255, 255, 255, 0.75);

        font-size: 0.8rem;

        letter-spacing: 0.08em;

        text-transform: uppercase;

        text-decoration: none;

    }

    .hero-scroll i {

        display: block;

        text-align: center;

        margin-top: 6px;

        animation: heroBounce 1.7s infinite;

    }

    @keyframes heroBounce {

        0%, 100% {

            transform: translateY(0);

        }

        50% {

            transform: translateY(6px);

        }

    }

        .rounded-glass {

          background: #fff;

          border-radius: 12px;

          padding: 18px;

          box-shadow: 0 6px 30px rgba(2, 10, 3, 0.04);

        }

        .soft-panel {

          background: var(--surface-soft);

        }

        /* =========================

       FOOTER

    ========================= */

    .site-footer {

        position: relative;

        padding: 85px 0 0;

        background: #071b0c;

        color: rgba(255, 255, 255, 0.72);

    }

    .footer-main {

        display: grid;

        grid-template-columns: 1.6fr 0.75fr 0.9fr 1.1fr;

        gap: clamp(35px, 5vw, 75px);

        padding-bottom: 65px;

    }

    /* Brand */

    .footer-brand {

        max-width: 390px;

    }

    .footer-brand-header {

        display: flex;

        align-items: center;

        gap: 13px;

        margin-bottom: 22px;

    }

    .footer-logo {

        width: 52px;

        height: 52px;

        object-fit: cover;

        border-radius: 9px;

    }

    .footer-brand-header > div {

        display: flex;

        flex-direction: column;

        line-height: 1.2;

    }

    .footer-brand-header strong {

        color: #fff;

        font-size: 1rem;

    }

    .footer-brand-header span {

        margin-top: 4px;

        color: rgba(255, 255, 255, 0.6);

        font-size: 0.75rem;

    }

    .footer-brand > p {

        margin: 0;

        color: rgba(255, 255, 255, 0.58);

        line-height: 1.7;

    }

    /* Headings */

    .footer-column h3 {

        margin: 4px 0 20px;

        color: #fff;

        font-size: 0.82rem;

        font-weight: 800;

        letter-spacing: 0.11em;

        text-transform: uppercase;

    }

    /* Links */

    .footer-links {

        display: flex;

        flex-direction: column;

        align-items: flex-start;

        gap: 12px;

    }

    .site-footer a {

        color: rgba(255, 255, 255, 0.64);

        text-decoration: none;

        transition: color 0.2s ease;

    }

    .site-footer a:hover {

        color: var(--cvsu-gold);

    }

    /* Social */

    .footer-socials {

        display: flex;

        gap: 9px;

        margin-top: 25px;

    }

    .footer-socials a {

        display: grid;

        place-items: center;

        width: 38px;

        height: 38px;

        border: 1px solid rgba(255, 255, 255, 0.12);

        border-radius: 50%;

        color: rgba(255, 255, 255, 0.78);

    }

    .footer-socials a:hover {

        border-color: rgba(232, 197, 71, 0.5);

        background: rgba(232, 197, 71, 0.08);

        color: var(--cvsu-gold);

    }

    /* Contact */

    .footer-contact {

        display: flex;

        flex-direction: column;

    }

    .footer-contact-item {

        display: flex;

        align-items: flex-start;

        gap: 12px;

        margin-bottom: 15px;

        font-size: 0.9rem;

        line-height: 1.55;

    }

    .footer-contact-item i {

        width: 17px;

        margin-top: 4px;

        color: var(--cvsu-gold);

        text-align: center;

    }

    /* Bottom */

    .footer-bottom {

        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 30px;

        padding: 24px 0;

        border-top: 1px solid rgba(255, 255, 255, 0.1);

    }

    .footer-bottom p {

        margin: 0;

        color: rgba(255, 255, 255, 0.42);

        font-size: 0.82rem;

    }

    .back-to-top {

        display: inline-flex;

        align-items: center;

        gap: 8px;

        flex-shrink: 0;

        font-size: 0.82rem;

        font-weight: 700;

    }

    .back-to-top i {

        transition: transform 0.2s ease;

    }

    .back-to-top:hover i {

        transform: translateY(-3px);

    }

        .accordion-body,

        .accordion-body p,

        .accordion-body li {

          text-align: justify;

          line-height: 1.65;

        }

        .accordion-button {

          font-weight: 600;

          padding: 1rem 1.25rem;

          transition: all 0.3s ease;

        }

        .accordion-button:not(.collapsed) {

          background: var(--cvsu-green) !important;

          color: #fff !important;

          box-shadow: none;

        }

        .accordion-item {

          border: none;

          margin-bottom: 12px;

          border-radius: 14px;

          overflow: hidden;

          box-shadow: 0 4px 14px rgba(0, 0, 0, 0.06);

        }

        .accordion-button:focus {

          box-shadow: none;

        }

        .dropcap:first-letter {

          float: left;

          font-size: 3.2rem;

          font-weight: 700;

          line-height: 0;

          padding-right: 3px;

          padding-top: 4px;

          color: var(--cvsu-green);

        }

        .navbar-logo {

        width: 46px;

        height: 46px;

        object-fit: cover;

        border-radius: 8px;

    }

    .navbar-brand-text {

        display: flex;

        flex-direction: column;

        margin-left: 12px;

        line-height: 1.15;

    }

    .navbar-campus {

        font-size: 0.9rem;

        font-weight: 700;

        letter-spacing: 0.01em;

    }

    .navbar-school {

        margin-top: 3px;

        font-size: 0.72rem;

        opacity: 0.78;

    }

    .navbar-nav {

        gap: 6px;

    }

    .navbar .nav-link {

        padding: 9px 13px !important;

        border-radius: 7px;

        font-size: 0.95rem;

    }

    .navbar:not(.scrolled) .nav-link:hover {

        background: rgba(255, 255, 255, 0.08);

    }

    .navbar.scrolled .nav-link:hover {

        background: rgba(10, 77, 0, 0.06);

    }

    .navbar-portal-btn {

        display: inline-flex;

        align-items: center;

        padding: 10px 16px;

        border: 1px solid var(--cvsu-gold);

        border-radius: 8px;

        background: var(--cvsu-gold);

        color: #162016;

        font-size: 0.9rem;

        font-weight: 700;

        text-decoration: none;

        transition:

            transform 0.2s ease,

            box-shadow 0.2s ease,

            background-color 0.2s ease;

    }

    .navbar-portal-btn:hover {

        transform: translateY(-1px);

        background: #f1d15d;

        color: #162016;

        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);

    }

    .highlights-section {

        padding: 110px 0;

        background: #fff;

    }

    .section-heading {

        display: flex;

        justify-content: space-between;

        align-items: end;

        gap: 40px;

        margin-bottom: 42px;

    }

    .section-heading > div {

        max-width: 650px;

    }

    .section-eyebrow {

        display: block;

        margin-bottom: 10px;

        color: var(--cvsu-green);

        font-size: 0.78rem;

        font-weight: 800;

        letter-spacing: 0.14em;

        text-transform: uppercase;

    }

    .section-heading h2 {

        margin: 0;

        color: #142018;

        font-size: clamp(2rem, 4vw, 3.3rem);

        line-height: 1.05;

        font-weight: 800;

        letter-spacing: -0.035em;

    }

    .section-heading > p {

        max-width: 430px;

        margin: 0;

        color: var(--muted);

        font-size: 0.98rem;

        line-height: 1.7;

    }

    /* Highlight layout */

    .highlights-grid {

        display: grid;

        grid-template-columns: 1.35fr 1fr;

        gap: 20px;

        min-height: 650px;

    }

    .highlight-side {

        display: grid;

        grid-template-rows: 1fr 1fr;

        gap: 20px;

    }

    /* Individual highlight */

    .highlight-card {

        position: relative;

        min-height: 0;

        overflow: hidden;

        border-radius: 18px;

        background: #102016;

    }

    .highlight-card img {

        position: absolute;

        inset: 0;

        width: 100%;

        height: 100%;

        object-fit: cover;

        transition: transform 0.7s ease;

    }

    .highlight-card:hover img {

        transform: scale(1.045);

    }

    .highlight-overlay {

        position: absolute;

        inset: 0;

        background:

            linear-gradient(

                to top,

                rgba(3, 20, 7, 0.91) 0%,

                rgba(3, 20, 7, 0.48) 48%,

                rgba(3, 20, 7, 0.08) 100%

            );

    }

    .highlight-content {

        position: absolute;

        left: 0;

        right: 0;

        bottom: 0;

        z-index: 2;

        padding: 34px;

        color: #fff;

    }

    .highlight-category {

        display: block;

        margin-bottom: 10px;

        color: var(--cvsu-gold);

        font-size: 0.72rem;

        font-weight: 800;

        letter-spacing: 0.12em;

        text-transform: uppercase;

    }

    .highlight-content h3 {

        margin: 0 0 12px;

        color: #fff;

        font-size: 1.6rem;

        font-weight: 700;

        line-height: 1.15;

    }

    .highlight-featured .highlight-content h3 {

        font-size: clamp(2rem, 3vw, 3rem);

    }

    .highlight-content p {

        max-width: 540px;

        margin: 0 0 18px;

        color: rgba(255, 255, 255, 0.78);

        line-height: 1.65;

    }

    .highlight-link {

        display: inline-flex;

        align-items: center;

        gap: 9px;

        color: #fff;

        font-size: 0.9rem;

        font-weight: 700;

        text-decoration: none;

    }

    .highlight-link i {

        transition: transform 0.2s ease;

    }

    .highlight-link:hover {

        color: var(--cvsu-gold);

    }

    .highlight-link:hover i {

        transform: translateX(4px);

    }

    /* =========================

       ABOUT

    ========================= */

    #about {

        padding: 115px 0;

        background: #f7f9f5;

    }

    .about-intro {

        display: grid;

        grid-template-columns: 1.05fr 0.95fr;

        align-items: center;

        gap: clamp(55px, 7vw, 100px);

    }

    /* Images */

    .about-visual {

        position: relative;

        min-height: 600px;

    }

    .about-image-main {

        position: absolute;

        top: 0;

        left: 0;

        width: 82%;

        height: 520px;

        overflow: hidden;

        border-radius: 20px;

    }

    .about-image-main img {

        width: 100%;

        height: 100%;

        object-fit: cover;

    }

    .about-image-secondary img {

        width: 100%;

        height: 100%;

        object-fit: cover;

        object-position: center;

    }

    .about-image-secondary {

        position: absolute;

        right: 0;

        bottom: 0;

        width: 58%;

        height: 250px;

        overflow: hidden;

        border: 7px solid #f7f9f5;

        border-radius: 18px;

        box-shadow: 0 18px 45px rgba(0, 0, 0, 0.12);

    }

    /* Small identity badge */

    .about-badge {

        position: absolute;

        left: 28px;

        bottom: 28px;

        display: flex;

        align-items: center;

        gap: 13px;

        padding: 14px 18px;

        border-radius: 12px;

        background: rgba(255, 255, 255, 0.95);

        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);

        z-index: 3;

    }

    .about-badge-icon {

        display: grid;

        place-items: center;

        width: 42px;

        height: 42px;

        border-radius: 9px;

        background: var(--cvsu-green);

        color: #fff;

    }

    .about-badge div {

        display: flex;

        flex-direction: column;

    }

    .about-badge strong {

        color: #142018;

        font-size: 0.95rem;

    }

    .about-badge div span {

        margin-top: 2px;

        color: var(--muted);

        font-size: 0.72rem;

    }

    /* About copy */

    .about-content h2 {

        margin: 0 0 24px;

        color: #142018;

        font-size: clamp(2.3rem, 4vw, 4rem);

        line-height: 1.05;

        font-weight: 800;

        letter-spacing: -0.04em;

    }

    .about-content h2 span {

        color: var(--cvsu-green);

    }

    .about-content > p {

        color: var(--muted);

        font-size: 1rem;

        line-height: 1.8;

    }

    .about-content .about-lead {

        color: #354139;

        font-size: 1.08rem;

    }

    /* Values */

    .about-values {

        display: grid;

        gap: 16px;

        margin: 30px 0;

    }

    .about-value {

        display: flex;

        align-items: flex-start;

        gap: 15px;

    }

    .about-value > i {

        display: grid;

        place-items: center;

        flex: 0 0 42px;

        width: 42px;

        height: 42px;

        border-radius: 10px;

        background: rgba(10, 77, 0, 0.08);

        color: var(--cvsu-green);

        font-size: 1rem;

    }

    .about-value div {

        display: flex;

        flex-direction: column;

    }

    .about-value strong {

        color: #18231c;

        font-size: 0.95rem;

    }

    .about-value span {

        margin-top: 3px;

        color: var(--muted);

        font-size: 0.87rem;

        line-height: 1.5;

    }

    /* About link */

    .about-link {

        display: inline-flex;

        align-items: center;

        gap: 9px;

        color: var(--cvsu-green);

        font-size: 0.92rem;

        font-weight: 700;

        text-decoration: none;

    }

    .about-link i {

        transition: transform 0.2s ease;

    }

    .about-link:hover {

        color: #073800;

    }

    .about-link:hover i {

        transform: translateY(3px);

    }

    .school-information {

        padding-top: 120px;

    }

    .school-info-heading {

        max-width: 680px;

        margin-bottom: 35px;

    }

    .school-info-heading h3 {

        margin: 0 0 14px;

        color: #142018;

        font-size: clamp(1.8rem, 3vw, 2.6rem);

        font-weight: 800;

        letter-spacing: -0.025em;

    }

    .school-info-heading p {

        margin: 0;

        color: var(--muted);

        line-height: 1.7;

    }

    /* =========================

       GOALS

    ========================= */

    .goals-section {

        position: relative;

        padding: 115px 0;

        background:

            linear-gradient(

                135deg,

                #073800 0%,

                var(--cvsu-green) 55%,

                #0d6504 100%

            );

        color: #fff;

        overflow: hidden;

    }

    .goals-section::before {

        content: "";

        position: absolute;

        width: 500px;

        height: 500px;

        right: -180px;

        top: -220px;

        border: 1px solid rgba(255, 255, 255, 0.08);

        border-radius: 50%;

    }

    .goals-section .container {

        position: relative;

        z-index: 2;

    }

    /* Heading */

    .goals-header {

        display: grid;

        grid-template-columns: 1.2fr 0.8fr;

        align-items: end;

        gap: 70px;

        margin-bottom: 65px;

    }

    .goals-eyebrow {

        display: block;

        margin-bottom: 12px;

        color: var(--cvsu-gold);

        font-size: 0.78rem;

        font-weight: 800;

        letter-spacing: 0.14em;

        text-transform: uppercase;

    }

    .goals-header h2 {

        max-width: 700px;

        margin: 0;

        color: #fff;

        font-size: clamp(2.5rem, 5vw, 4.5rem);

        line-height: 1.02;

        font-weight: 800;

        letter-spacing: -0.045em;

    }

    .goals-header h2 span {

        color: var(--cvsu-gold);

    }

    .goals-header > p {

        margin: 0;

        color: rgba(255, 255, 255, 0.72);

        font-size: 1rem;

        line-height: 1.8;

    }

    /* Goal rows */

    .goals-list {

        border-top: 1px solid rgba(255, 255, 255, 0.18);

    }

    .goal-item {

        display: grid;

        grid-template-columns: 80px 1fr;

        align-items: center;

        gap: 25px;

        padding: 32px 5px;

        border-bottom: 1px solid rgba(255, 255, 255, 0.18);

        transition:

            padding-left 0.25s ease,

            background-color 0.25s ease;

    }

    .goal-item:hover {

        padding-left: 15px;

        background: rgba(255, 255, 255, 0.035);

    }

    .goal-number {

        color: var(--cvsu-gold);

        font-size: 0.8rem;

        font-weight: 800;

        letter-spacing: 0.08em;

    }

    .goal-content h3 {

        margin: 0 0 7px;

        color: #fff;

        font-size: 1.2rem;

        font-weight: 700;

    }

    .goal-content p {

        max-width: 850px;

        margin: 0;

        color: rgba(255, 255, 255, 0.67);

        line-height: 1.65;

    }

    /* =========================

       CAMPUS LIFE

    ========================= */

    .campus-life-section {

        padding: 115px 0;

        background: #fff;

    }

    .campus-heading {

        display: grid;

        grid-template-columns: 1.15fr 0.85fr;

        align-items: end;

        gap: 70px;

        margin-bottom: 48px;

    }

    .campus-heading h2 {

        max-width: 700px;

        margin: 0;

        color: #142018;

        font-size: clamp(2.4rem, 4.5vw, 4rem);

        line-height: 1.04;

        font-weight: 800;

        letter-spacing: -0.04em;

    }

    .campus-heading h2 span {

        color: var(--cvsu-green);

    }

    .campus-heading > p {

        max-width: 450px;

        margin: 0;

        color: var(--muted);

        line-height: 1.75;

    }

    /* Gallery */

    .campus-gallery {

        display: grid;

        grid-template-columns:

            minmax(0, 1.35fr)

            minmax(0, 0.65fr);

        grid-template-rows: 300px 300px;

        gap: 18px;

    }

    .campus-photo {

        position: relative;

        margin: 0;

        overflow: hidden;

        border-radius: 18px;

        background: #e9eee7;

    }

    .campus-photo-large {

        grid-row: 1 / 3;

    }

    .campus-photo-tall {

        grid-column: 2;

        grid-row: 1;

    }

    .campus-photo-small {

        grid-column: 2;

        grid-row: 2;

    }

    .campus-photo img {

        width: 100%;

        height: 100%;

        object-fit: cover;

        transition: transform 0.7s ease;

    }

    .campus-photo:hover img {

        transform: scale(1.035);

    }

    /* =========================

       ENROLLMENT CTA

    ========================= */

    .enrollment-cta {

        padding: 0 0 115px;

        background: #fff;

    }

    .enrollment-cta-inner {

        position: relative;

        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 50px;

        min-height: 420px;

        padding: clamp(45px, 7vw, 85px);

        overflow: hidden;

        border-radius: 24px;

        background:

            linear-gradient(

                120deg,

                #f0f6eb 0%,

                #f8faf6 55%,

                #edf5e8 100%

            );

    }

    /* Decorative background */

    .enrollment-cta-inner::before {

        content: "";

        position: absolute;

        right: -130px;

        top: -180px;

        width: 470px;

        height: 470px;

        border: 1px solid rgba(10, 77, 0, 0.08);

        border-radius: 50%;

    }

    .enrollment-cta-inner::after {

        content: "";

        position: absolute;

        right: -30px;

        bottom: -220px;

        width: 400px;

        height: 400px;

        border: 80px solid rgba(10, 77, 0, 0.035);

        border-radius: 50%;

    }

    /* Content */

    .enrollment-cta-content {

        position: relative;

        z-index: 2;

        max-width: 720px;

    }

    .enrollment-eyebrow {

        display: block;

        margin-bottom: 13px;

        color: var(--cvsu-green);

        font-size: 0.78rem;

        font-weight: 800;

        letter-spacing: 0.14em;

        text-transform: uppercase;

    }

    .enrollment-cta h2 {

        margin: 0 0 20px;

        color: #142018;

        font-size: clamp(2.5rem, 5vw, 4.4rem);

        line-height: 1.02;

        font-weight: 800;

        letter-spacing: -0.045em;

    }

    .enrollment-cta h2 span {

        color: var(--cvsu-green);

    }

    .enrollment-cta-content > p {

        max-width: 610px;

        margin: 0;

        color: var(--muted);

        font-size: 1.05rem;

        line-height: 1.75;

    }

    /* Actions */

    .enrollment-actions {

        display: flex;

        flex-wrap: wrap;

        gap: 12px;

        margin-top: 30px;

    }

    .enrollment-primary,

    .enrollment-secondary {

        display: inline-flex;

        align-items: center;

        justify-content: center;

        gap: 10px;

        padding: 13px 20px;

        border-radius: 8px;

        font-weight: 700;

        text-decoration: none;

        transition:

            transform 0.2s ease,

            background-color 0.2s ease,

            box-shadow 0.2s ease;

    }

    .enrollment-primary {

        background: var(--cvsu-green);

        color: #fff;

    }

    .enrollment-primary:hover {

        transform: translateY(-2px);

        background: #073800;

        color: #fff;

        box-shadow: 0 8px 20px rgba(10, 77, 0, 0.18);

    }

    .enrollment-primary i {

        transition: transform 0.2s ease;

    }

    .enrollment-primary:hover i {

        transform: translateX(3px);

    }

    .enrollment-secondary {

        border: 1px solid rgba(10, 77, 0, 0.18);

        background: rgba(255, 255, 255, 0.65);

        color: var(--cvsu-green);

    }

    .enrollment-secondary:hover {

        transform: translateY(-2px);

        background: #fff;

        color: var(--cvsu-green);

    }

    /* Decorative graduation icon */

    .enrollment-mark {

        position: relative;

        z-index: 2;

        display: grid;

        place-items: center;

        flex: 0 0 170px;

        width: 170px;

        height: 170px;

        border: 1px solid rgba(10, 77, 0, 0.08);

        border-radius: 50%;

        background: rgba(255, 255, 255, 0.48);

        color: rgba(10, 77, 0, 0.12);

        font-size: 5rem;

    }

     /* =========================
   PROJECT DISCLAIMER
========================= */

#projectDisclaimerModal .modal-dialog {
    max-width: 560px;
}

#projectDisclaimerModal .modal-content {
    overflow: hidden;
    border: 0;
    border-radius: 20px;
    background: #fff;
    box-shadow: 0 30px 80px rgba(0, 0, 0, 0.25);
}

#projectDisclaimerModal .modal-body {
    padding: 42px;
}

.project-disclaimer-icon {
    display: grid;
    place-items: center;

    width: 52px;
    height: 52px;
    margin-bottom: 24px;

    border-radius: 12px;
    background: rgba(10, 77, 0, 0.09);
    color: var(--cvsu-green);

    font-size: 1.2rem;
}

.project-disclaimer-eyebrow {
    display: block;
    margin-bottom: 10px;

    color: var(--cvsu-green);
    font-size: 0.75rem;
    font-weight: 800;
    letter-spacing: 0.13em;
    text-transform: uppercase;
}

#projectDisclaimerModal h2 {
    margin: 0 0 18px;

    color: #142018;
    font-size: 2rem;
    line-height: 1.1;
    font-weight: 800;
    letter-spacing: -0.03em;
}

#projectDisclaimerModal p {
    margin-bottom: 16px;

    color: #667169;
    line-height: 1.7;
}

.project-disclaimer-note {
    margin: 22px 0 !important;
    padding: 15px 17px;

    border-left: 3px solid var(--cvsu-gold);
    border-radius: 0 8px 8px 0;

    background: #f5f8f2;
    font-size: 0.9rem;
}

.project-disclaimer-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 9px;

    padding: 13px 20px;

    border: 0;
    border-radius: 8px;

    background: var(--cvsu-green);
    color: #fff;

    font-family: inherit;
    font-size: 0.95rem;
    font-weight: 700;

    cursor: pointer;

    transition:
        background-color 0.2s ease,
        transform 0.2s ease;
}

.project-disclaimer-btn:hover {
    transform: translateY(-2px);
    background: #073800;
}

    @media (max-width: 991.98px) {

        .navbar {

            padding-top: 10px !important;

            padding-bottom: 10px !important;

        }

        .navbar-logo {

            width: 42px;

            height: 42px;

        }

        .navbar-campus {

            font-size: 0.82rem;

        }

        .navbar-school {

            font-size: 0.65rem;

        }

        /*

         * Once the mobile menu is opened, give it a solid surface

         * even when we're still at the top of the hero.

         */

        .navbar.menu-open {

    background: transparent !important;

        backdrop-filter: blur(14px);

        -webkit-backdrop-filter: blur(14px);

    box-shadow: none;

    }

        .navbar-collapse {
    position: absolute;
    top: calc(100% + 8px);
    left: 12px;
    right: 12px;

    padding: 14px;
    border: 1px solid rgba(10, 77, 0, 0.08);
    border-radius: 14px;

    background: rgba(250, 251, 248, 0.98);
    box-shadow: 0 18px 45px rgba(0, 0, 0, 0.14);

    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
}

        .navbar-nav {
    align-items: stretch !important;
    gap: 3px;
}

.navbar .nav-link {
    padding: 10px 12px !important;
    border-radius: 8px;
    color: #152019 !important;
}

        .navbar .dropdown-menu {
    margin: 3px 0 7px;
    padding: 6px;
    border: none;
    border-radius: 9px;
    background: rgba(10, 77, 0, 0.045);
    box-shadow: none;
}

.navbar .dropdown-item {
    padding: 9px 10px;
    border-radius: 7px;
    color: #263129;
    font-size: 0.9rem;
}

.navbar .dropdown-item:hover,
.navbar .dropdown-item:focus {
    background: rgba(10, 77, 0, 0.07);
    color: var(--cvsu-green);
}

        .navbar-portal-btn {
    width: 100%;
    justify-content: center;
    margin-top: 8px;
}

        .campus-heading {

        grid-template-columns: 1fr;

        gap: 18px;

    }

    .campus-heading > p {

        max-width: 650px;

    }

    .campus-gallery {

        grid-template-rows: 260px 260px;

    }

    .enrollment-cta-inner {

        min-height: auto;

    }

    .enrollment-mark {

        flex: 0 0 130px;

        width: 130px;

        height: 130px;

        font-size: 3.8rem;

    }

        .section-heading {

            align-items: start;

            flex-direction: column;

            gap: 16px;

        }

        .highlights-grid {

            grid-template-columns: 1fr;

            min-height: auto;

        }

        .highlight-featured {

            min-height: 520px;

        }

        .highlight-side {

            grid-template-columns: 1fr 1fr;

            grid-template-rows: none;

        }

        .highlight-small {

            min-height: 350px;

        }

        #about {

        padding: 90px 0;

    }

        /* Tablet: About, School Information, Goals, Footer */
    .about-intro {

        grid-template-columns: 1fr;

        gap: 65px;

    }

    .about-visual {

        min-height: 570px;

        max-width: 700px;

    }

    .about-content {

        max-width: 700px;

    }

    .school-information {

        padding-top: 90px;

    }

    .goals-header {

        grid-template-columns: 1fr;

        gap: 20px;

    }

    .goals-header > p {

        max-width: 650px;

    }

    .footer-main {

        grid-template-columns: 1.4fr 1fr 1fr;

    }

    .footer-brand {

        grid-column: 1 / -1;

        max-width: 520px;

    }

    

@media (max-width: 767.98px) {
    #projectDisclaimerModal .modal-dialog {
        margin: 16px;
    }

    #projectDisclaimerModal .modal-body {
        padding: 30px 24px;
    }

    #projectDisclaimerModal h2 {
        font-size: 1.7rem;
    }

    .project-disclaimer-btn {
        width: 100%;
    }
}
    }

    @media (max-width: 767.98px) {

        .hero {

            min-height: 100svh;

            background-position: 58% center;

        }

        .hero::before {

            background: linear-gradient(

                90deg,

                rgba(3, 25, 7, 0.91) 0%,

                rgba(5, 46, 13, 0.76) 65%,

                rgba(4, 20, 8, 0.55) 100%

            );

        }

        .hero-content {

            padding-top: 70px;

            padding-bottom: 70px;

        }

        .hero-eyebrow {

            font-size: 0.72rem;

            margin-bottom: 1rem;

        }

        .hero h1 {

            font-size: clamp(2.4rem, 12vw, 3.5rem);

            line-height: 1;

        }

        .hero-description {

            font-size: 1rem;

            line-height: 1.65;

        }

        .hero-actions {

            flex-direction: column;

            align-items: stretch;

        }

        .hero-btn-primary,

        .hero-btn-secondary {

            justify-content: center;

            width: 100%;

        }

        .hero-scroll {

            bottom: 18px;

        }

        .highlights-section {

        padding: 75px 0;

    }

    .section-heading {

        margin-bottom: 30px;

    }

    .highlights-grid {

        gap: 14px;

    }

    .highlight-side {

        grid-template-columns: 1fr;

        gap: 14px;

    }

    .highlight-featured {

        min-height: 480px;

    }

    .highlight-small {

        min-height: 300px;

    }

    .highlight-content {

        padding: 24px;

    }

    .highlight-featured .highlight-content h3 {

        font-size: 2rem;

    }

    .highlight-content h3 {

        font-size: 1.4rem;

    }

    #about {

        padding: 75px 0;

    }

    .about-intro {

        gap: 45px;

    }

    .about-visual {

        min-height: 430px;

    }

    .about-image-main {

        width: 92%;

        height: 370px;

    }

    .about-image-secondary {

        width: 60%;

        height: 180px;

        border-width: 5px;

    }

    .about-badge {

        left: 16px;

        bottom: 12px;

        padding: 11px 13px;

    }

    .about-badge-icon {

        width: 36px;

        height: 36px;

    }

    .about-badge div span {

        font-size: 0.65rem;

    }

    .about-content h2 {

        font-size: clamp(2.1rem, 10vw, 3rem);

    }

    .about-content .about-lead {

        font-size: 1rem;

    }

    .school-information {

        padding-top: 70px;

    }

    .goals-section {

        padding: 75px 0;

    }

    .goals-header {

        margin-bottom: 45px;

    }

    .goals-header h2 {

        font-size: clamp(2.3rem, 11vw, 3.4rem);

    }

    .goal-item {

        grid-template-columns: 80px 1fr;

        gap: 15px;

        padding: 25px 0;

    }

    .goal-content h3 {

        font-size: 1.05rem;

    }

    .goal-content p {

        font-size: 0.9rem;

    }

    .campus-life-section {

        padding: 75px 0;

    }

    .campus-heading {

        margin-bottom: 30px;

    }

    .campus-heading h2 {

        font-size: clamp(2.2rem, 10vw, 3rem);

    }

    .campus-gallery {

        display: grid;

        grid-template-columns: 1fr;

        grid-template-rows: none;

        gap: 14px;

    }

    .campus-photo-large,

    .campus-photo-tall,

    .campus-photo-small {

        grid-column: auto;

        grid-row: auto;

    }

    .campus-photo-large {

        height: 360px;

    }

    .campus-photo-tall,

    .campus-photo-small {

        height: 250px;

    }

    .enrollment-cta {

        padding: 0 0 75px;

    }

    .enrollment-cta-inner {

        padding: 42px 25px;

        border-radius: 18px;

    }

    .enrollment-cta h2 {

        font-size: clamp(2.2rem, 10vw, 3.1rem);

    }

    .enrollment-cta-content > p {

        font-size: 0.98rem;

    }

    .enrollment-actions {

        flex-direction: column;

    }

    .enrollment-primary,

    .enrollment-secondary {

        width: 100%;

    }

    .enrollment-mark {

        display: none;

    }

    .site-footer {

        padding-top: 65px;

    }

    .footer-main {

        grid-template-columns: 1fr;

        gap: 38px;

        padding-bottom: 45px;

    }

    .footer-brand {

        grid-column: auto;

    }

    .footer-bottom {

        align-items: flex-start;

        flex-direction: column;

        gap: 15px;

    }

    .footer-bottom p {

        line-height: 1.6;

    }

    .project-disclaimer {
    margin: 15px;
    border-radius: 18px;
}

.project-disclaimer-icon {
    width: 48px;
    height: 48px;
    margin: 24px 0 0 24px;
}

.project-disclaimer .modal-body {
    padding: 28px 24px 24px;
}

.project-disclaimer h2 {
    font-size: 1.75rem;
}

.project-disclaimer-btn {
    width: 100%;
}

    }

    /* =========================
       REDUCED MOTION
    ========================= */
    @media (prefers-reduced-motion: reduce) {
        html {
            scroll-behavior: auto;
        }

        *,
        *::before,
        *::after {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
            scroll-behavior: auto !important;
        }
    }

    </style>

</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark py-3" id="mainNavbar">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#home">
    <img
        src="{{ asset('images/logo.jpg') }}"
        alt="CvSU Naic logo"
        class="navbar-logo"
    />

    <div class="navbar-brand-text">
        <span class="navbar-campus">CvSU Naic Campus</span>
        <span class="navbar-school">Laboratory Science High School</span>
    </div>
</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto align-items-lg-center">
          <li class="nav-item">
            <a class="nav-link active" href="#home">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">About</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#history">History</a></li>
              <li><a class="dropdown-item" href="#vision">Vision & Mission</a></li>
              <li><a class="dropdown-item" href="#quality">Quality Policy</a></li>
              <li><a class="dropdown-item" href="#goals">Goals</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#events">Events</a>
          </li>

          <li class="nav-item ms-lg-3">
            <a href="{{ route('login.student') }}" class="navbar-portal-btn">
    <i class="fa-solid fa-arrow-right-to-bracket me-2"></i>
    Portal Login
</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="home" class="hero">
    <div class="container">
        <div class="hero-content" data-aos="fade-up">

            <div class="hero-eyebrow">
                <i class="fa-solid fa-flask"></i>
                Laboratory Science High School
            </div>

            <h1>
                Learning through
                science, innovation,
                and excellence.
            </h1>

            <p class="hero-description">
                Cavite State University – Naic Campus Laboratory Science High School
                develops future-ready learners through quality education,
                scientific inquiry, innovation, and strong moral values.
            </p>

            <div class="hero-actions">

                <a href="{{ route('enroll.form') }}" class="hero-btn-primary">
                    <i class="fa-solid fa-user-graduate"></i>
                    Enroll Now
                </a>

                <a href="{{ route('login.student') }}" class="hero-btn-secondary">
                    <i class="fa-solid fa-user"></i>
                    Student Portal
                </a>

                <a href="{{ route('login.professor') }}" class="hero-btn-secondary">
                    <i class="fa-solid fa-chalkboard-user"></i>
                    Teacher Portal
                </a>

            </div>

        </div>
    </div>

    <a href="#events" class="hero-scroll">
        Discover LSHS
        <i class="fa-solid fa-chevron-down"></i>
    </a>
</section>

<main>
    <section id="events" class="highlights-section">
    <div class="container">

        <div class="section-heading" data-aos="fade-up">
            <div>
                <span class="section-eyebrow">Discover LSHS</span>
                <h2>High School Highlights</h2>
            </div>

            <p>
                Discover the learning experiences, academic activities,
                and spaces that shape student life at Laboratory Science
                High School.
            </p>
        </div>


        <div class="highlights-grid">

            <!-- Featured highlight -->
            <article
                class="highlight-card highlight-featured"
                data-aos="fade-up"
            >
                <img
                    src="{{ asset('images/lab.jpg') }}"
                    alt="Students presenting projects at the annual science fair"
                >

                <div class="highlight-overlay"></div>

                <div class="highlight-content">
                    <span class="highlight-category">
                        Science & Innovation
                    </span>

                    <h3>Annual Science Fair</h3>

                    <p>
                        Student projects across biology, chemistry,
                        engineering, and research showcased in a
                        campus-wide celebration of inquiry.
                    </p>

                    <a href="#goals" class="highlight-link">
                        Discover our goals
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </article>


            <div class="highlight-side">

                <!-- Teacher Training -->
                <article
                    class="highlight-card highlight-small"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <img
                        src="{{ asset('images/present.jpg') }}"
                        alt="Faculty workshop and teacher development session"
                    >

                    <div class="highlight-overlay"></div>

                    <div class="highlight-content">
                        <span class="highlight-category">
                            Faculty Development
                        </span>

                        <h3>Teacher Training Workshop</h3>

                        <a href="#vision" class="highlight-link">
                            Our mission
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </article>


                <!-- Library -->
                <article
                    class="highlight-card highlight-small"
                    data-aos="fade-up"
                    data-aos-delay="200"
                >
                    <img
                        src="{{ asset('images/library.jpg') }}"
                        alt="Library and student collaboration area"
                    >

                    <div class="highlight-overlay"></div>

                    <div class="highlight-content">
                        <span class="highlight-category">
                            Learning Spaces
                        </span>

                        <h3>Library & Research Hub</h3>

                        <a href="#history" class="highlight-link">
                            Explore our history
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

            </div>
        </div>

    </div>
</section>

<section id="about">
<div class="container">
      <div class="about-intro">

    <div class="about-visual" data-aos="fade-right">
        <div class="about-image-main">
            <img
                src="{{ asset('images/IMG_1174.jpg') }}"
                alt="Cavite State University Naic Campus"
            >
        </div>

        <div class="about-image-secondary">
            <img
                src="{{ asset('images/IMG_1151.jpg') }}"
                alt="Laboratory Science High School campus"
            >
        </div>

        <div class="about-badge">
            <span class="about-badge-icon">
                <i class="fa-solid fa-graduation-cap"></i>
            </span>

            <div>
                <strong>LSHS</strong>
                <span>Science • Innovation • Excellence</span>
            </div>
        </div>
    </div>


    <div class="about-content" data-aos="fade-left">

        <span class="section-eyebrow">
            About LSHS
        </span>

        <h2>
            Building young minds through
            <span>science and discovery.</span>
        </h2>

        <p class="about-lead">
            Laboratory Science High School is part of Cavite State
            University – Naic Campus, providing learners with an
            environment centered on academic excellence, scientific
            inquiry, innovation, and character development.
        </p>

        <p>
            Through meaningful learning experiences and a commitment
            to quality education, LSHS prepares students to become
            capable, responsible, and future-ready members of society.
        </p>


        <div class="about-values">

            <div class="about-value">
                <i class="fa-solid fa-flask"></i>

                <div>
                    <strong>Scientific Inquiry</strong>
                    <span>
                        Encouraging curiosity, research, and discovery.
                    </span>
                </div>
            </div>

            <div class="about-value">
                <i class="fa-solid fa-lightbulb"></i>

                <div>
                    <strong>Innovation</strong>
                    <span>
                        Developing creative and future-ready learners.
                    </span>
                </div>
            </div>

            <div class="about-value">
                <i class="fa-solid fa-heart"></i>

                <div>
                    <strong>Character</strong>
                    <span>
                        Building responsible and morally upright leaders.
                    </span>
                </div>
            </div>

        </div>

        <a href="#school-information" class="about-link">
            Discover our story
            <i class="fa-solid fa-arrow-down"></i>
        </a>

    </div>

</div>
<div id="school-information" class="school-information">
<div class="school-info-heading" data-aos="fade-up">
    <span class="section-eyebrow">
        Know Our School
    </span>

    <h3>Learn more about LSHS</h3>

    <p>
        Explore the history, vision and mission, and quality policy
        that guide Laboratory Science High School.
    </p>
</div>
      <div class="accordion" id="aboutAccordion">
        <div class="accordion-item" data-aos="fade-up" id="history">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#historyCollapse" aria-expanded="true" aria-controls="historyCollapse">
              History
            </button>
          </h2>
          <div id="historyCollapse" class="accordion-collapse collapse show" data-bs-parent="#aboutAccordion">
            <div class="accordion-body rounded-glass soft-panel" style="padding: 1.5rem;">
              <p class="dropcap">
                <strong>CVSU NAIC HISTORY</strong> - Cavite School of Fisheries (CSF) was created under Republic Act No. 2661, sponsored by Cong. Justiniano Montano, the congressman for the lone district of Cavite, with initial appropriation of P 200,000.00, which was approved by Congress on June 18, 1960. Its implementation in 1961 seems to have a very slim chance due to financial constraints of the National Government. It was due to the efforts of Dr. Pedro G. Guiang, Asst. Director of Public Schools, who made representation to the budget commission to revert some reserved funds of other fishery schools that an initial amount of Php 40,000.00 was made available for CSF.
              </p>

              <p>
                Plans and budgetary proposals were prepared in July 1961. The item of one principal, three Fishery Technologists, and one clerk were created. The amount of Php 22,000.00 was set aside for the construction of the school building and the balance for supplies, materials, and equipment. Initial operation of the school began on June 4, 1962, with an enrollment of 175 first year students under the Secondary Fishery Education Curriculum and with an additional appropriation of Php 100,000.00. Classes were initially conducted in the old municipal building located in the heart of the town of Naic. After a year, the school was transferred to its present site in Bucana Malaki and Bagong Kalsada. CSF was converted to college in 1970, offering a two-and-a-half-year Technical Education Curriculum with 50 students enrolled.
              </p>

              <p>
                Since then, there was a continuous marked increase in enrollment, number of teaching and facilitative personnel, equipment, and other instructional facilities in both the Secondary and Technical Fishery Education Curricula. At the start of school year 1974-1975, the three-year Fishery Education Curriculum leading to a diploma in Fishery Technology was offered. Then on June 30, 1975, the Department of Education, Culture and Sports approved the offering of the four-year technological curriculum leading to a Bachelor of Science in Fisheries. In SY 1992-1993, additional short-term courses were offered, namely the two-year Food and Beverage Preparation Services and the six-month Basic Seaman Training Course. In 1997-1998, additional two courses were approved by CHED, namely Associate in Hotel and Restaurant Management and Associate in Food Technology, both ladderized programs leading to a bachelor's degree. The Bachelor of Secondary Education with three major areas of specialization was approved in the same school year.
              </p>

              <p>
                In 2001, another milestone was made in the history of the college when it was officially integrated into the Cavite State University System through RA No. 8292, by virtue of Board Resolution No. 2 dated February 6, 2001. The integration of the college, making it CvSU Naic, marked a new beginning. In the same year, Bachelor of Science in Business Management was offered. After a year, the campus also offered Bachelor of Elementary Education. In 2005-2006, two more programs were offered: Bachelor of Science in Information Technology and Bachelor of Computer Science. The integration also broadened the institution's mandated functions by including research, extension, and production.
              </p>

              <p>
                In 2016, the campus started focusing on aggressive infrastructure development. The construction of the AquaBEST Building, the two-storey library, and the STAR Building began. Major repairs of the existing buildings were also done in the following years. The campus continues to target additional academic and student-support facilities including a covered court, dormitory, interfaith chapel, and more laboratories.
              </p>

              <p>
                It is notable that the current University President, Dr. Hernando D. Robles, was the former Campus Administrator of CvSU Naic. He took his oath as the third CvSU President on October 6, 2016.
              </p>
            </div>
          </div>
        </div>

        <div class="accordion-item" data-aos="fade-up" id="vision">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#visionCollapse" aria-expanded="false" aria-controls="visionCollapse">
              Vision & Mission
            </button>
          </h2>
          <div id="visionCollapse" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
            <div class="accordion-body rounded-glass soft-panel" style="padding: 1.5rem;">
              <p class="dropcap">
                <strong>Vision:</strong><br /><br />
                The Premier University in historic Cavite globally recognized for excellence in character development, academics, research, innovation, and sustainable community engagement.
              </p>

              <p class="dropcap">
                <strong>Mission:</strong><br /><br />
                Cavite State University shall provide excellent, equitable, and relevant education through quality instruction and responsive research. It shall produce professional, skilled, and morally upright individuals ready for global competitiveness.
              </p>
            </div>
          </div>
        </div>

        <div class="accordion-item" data-aos="fade-up" id="quality">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#qualityCollapse" aria-expanded="false" aria-controls="qualityCollapse">
              Quality Policy
            </button>
          </h2>
          <div id="qualityCollapse" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
            <div class="accordion-body rounded-glass soft-panel" style="padding: 1.5rem;">
              <p class="dropcap">
                We commit to the <strong>highest standards of education</strong>, value our stakeholders, strive for <strong>continuous improvement</strong>, and uphold the university's core values of <strong>Truth, Excellence, and Service</strong> to produce globally competitive and morally upright individuals.
              </p>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
    </section>

    <section id="goals" class="goals-section">
    <div class="container">

        <div class="goals-header" data-aos="fade-up">
            <div>
                <span class="goals-eyebrow">Our Direction</span>

                <h2>
                    Developing learners for a
                    <span>better future.</span>
                </h2>
            </div>

            <p>
                Guided by the university's commitment to quality
                education, Laboratory Science High School provides
                meaningful learning experiences that prepare students
                for future academic and personal growth.
            </p>
        </div>


        <div class="goals-list">

    <!-- GOAL 01 -->
    <div class="goal-item" data-aos="fade-up">
        <span class="goal-number">01</span>

        <div class="goal-content">
            <h3>Graduate Excellence & Ethical Leadership</h3>
            <p>
                Produce technically competent, scientifically oriented graduates
                with entrepreneurial spirit and strong ethical values.
            </p>
        </div>

    </div>


    <!-- GOAL 02 -->
    <div class="goal-item" data-aos="fade-up">
        <span class="goal-number">02</span>

        <div class="goal-content">
            <h3>Research & Innovation</h3>
            <p>
                Conduct relevant research across fisheries, education, business,
                IT, arts, and sciences.
            </p>
        </div>

    </div>


    <!-- GOAL 03 -->
    <div class="goal-item" data-aos="fade-up">
        <span class="goal-number">03</span>

        <div class="goal-content">
            <h3>Community Development & Lifelong Learning</h3>
            <p>
                Implement training and outreach programs that foster self-help,
                critical thinking, and lifelong learning.
            </p>
        </div>

    </div>


    <!-- GOAL 04 -->
    <div class="goal-item" data-aos="fade-up">
        <span class="goal-number">04</span>

        <div class="goal-content">
            <h3>Sustainable Resource Management</h3>
            <p>
                Manage fishery and enterprise projects using sustainable,
                eco-friendly approaches.
            </p>
        </div>

    </div>


    <!-- GOAL 05 -->
    <div class="goal-item" data-aos="fade-up">
        <span class="goal-number">05</span>

        <div class="goal-content">
            <h3>Partnerships & Community Linkages</h3>
            <p>
                Build strong linkages with NGOs, government agencies,
                and communities.
            </p>
        </div>

    </div>

</div>

    </div>
    </section>

    <section id="campus-life" class="campus-life-section">
    <div class="container">

        <div class="campus-heading" data-aos="fade-up">
            <div>
                <span class="section-eyebrow">Campus Life</span>

                <h2>
                    A place to learn,
                    <span>discover, and grow.</span>
                </h2>
            </div>

            <p>
                Take a glimpse into the spaces and experiences that
                make up student life at Cavite State University –
                Naic Campus Laboratory Science High School.
            </p>
        </div>


        <div class="campus-gallery">

            <figure
                class="campus-photo campus-photo-large"
                data-aos="fade-up"
            >
                <img
                    src="{{ asset('images/IMG_1174.jpg') }}"
                    alt="CvSU Naic Campus"
                >
            </figure>


            <figure
                class="campus-photo campus-photo-tall"
                data-aos="fade-up"
                data-aos-delay="100"
            >
                <img
                    src="{{ asset('images/img.png') }}"
                    alt="Laboratory Science High School"
                >
            </figure>


            <figure
                class="campus-photo campus-photo-small"
                data-aos="fade-up"
                data-aos-delay="150"
            >
                <img
                    src="{{ asset('images/IMG_1151.jpg') }}"
                    alt="CvSU Naic campus life"
                >
            </figure>

        </div>

    </div>
</section>
<section class="enrollment-cta">
    <div class="container">

        <div class="enrollment-cta-inner" data-aos="fade-up">

            <div class="enrollment-cta-content">

                <span class="enrollment-eyebrow">
                    Admissions
                </span>

                <h2>
                    Ready to begin your
                    <span>journey at LSHS?</span>
                </h2>

                <p>
                    Take the next step toward becoming part of
                    Cavite State University – Naic Campus Laboratory
                    Science High School.
                </p>

                <div class="enrollment-actions">

                    <a
                        href="{{ route('enroll.form') }}"
                        class="enrollment-primary"
                    >
                        Enroll Now
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                    <a
                        href="{{ route('login.student') }}"
                        class="enrollment-secondary"
                    >
                        Student Portal
                    </a>

                </div>

            </div>


            <div class="enrollment-mark" aria-hidden="true">
                <i class="fa-solid fa-graduation-cap"></i>
            </div>

        </div>

    </div>
</section>
  </main>

  <footer class="site-footer">

    <div class="container">

        <div class="footer-main">

            <!-- School identity -->
            <div class="footer-brand">

                <div class="footer-brand-header">
                    <img
                        src="{{ asset('images/logo.jpg') }}"
                        alt="CvSU Naic Campus logo"
                        class="footer-logo"
                    >

                    <div>
                        <strong>CvSU Naic Campus</strong>
                        <span>Laboratory Science High School</span>
                    </div>
                </div>

                <p>
                    Advancing quality education through science,
                    innovation, research, and responsible leadership.
                </p>

                <div class="footer-socials">
                    <a href="#" aria-label="Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#" aria-label="Twitter">
                        <i class="fa-brands fa-twitter"></i>
                    </a>

                    <a href="#" aria-label="Instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>

            </div>


            <!-- Navigation -->
            <div class="footer-column">
                <h3>Explore</h3>

                <nav class="footer-links">
                    <a href="#home">Home</a>
                    <a href="#about">About LSHS</a>
                    <a href="#events">Highlights</a>
                    <a href="#goals">Our Goals</a>
                    <a href="#campus-life">Campus Life</a>
                </nav>
            </div>


            <!-- Portals -->
            <div class="footer-column">
                <h3>Quick Access</h3>

                <nav class="footer-links">
                    <a href="{{ route('enroll.form') }}">
                        Enrollment Form
                    </a>

                    <a href="{{ route('login.student') }}">
                        Student Portal
                    </a>

                    <a href="{{ route('login.professor') }}">
                        Teacher Portal
                    </a>
                </nav>
            </div>


            <!-- Contact -->
            <div class="footer-column footer-contact">
                <h3>Contact</h3>

                <div class="footer-contact-item">
                    <i class="fa-solid fa-location-dot"></i>

                    <span>
                        Brgy. Bucana Malaki,<br>
                        Naic, Cavite
                    </span>
                </div>

                <div class="footer-contact-item">
                    <i class="fa-solid fa-phone"></i>

                    <a href="tel:+63468905138">
                        (046) 890-5138
                    </a>
                </div>

                <div class="footer-contact-item">
                    <i class="fa-solid fa-envelope"></i>

                    <a href="mailto:info@cvsu-naic.edu.ph">
                        info@cvsu-naic.edu.ph
                    </a>
                </div>
            </div>

        </div>


        <div class="footer-bottom">

            <p>
                &copy; {{ date('Y') }} Cavite State University –
                Naic Campus Laboratory Science High School.
                All rights reserved.
            </p>

            <a href="#home" class="back-to-top">
                Back to top
                <i class="fa-solid fa-arrow-up"></i>
            </a>

        </div>

    </div>

</footer>

<!-- Academic Project Disclaimer Modal -->
<div
    class="modal fade"
    id="projectDisclaimerModal"
    tabindex="-1"
    aria-labelledby="projectDisclaimerTitle"
    aria-describedby="projectDisclaimerDescription"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content project-disclaimer">

            

            <div class="modal-body">
            <div class="project-disclaimer-icon">
                <i class="fas fa-graduation-cap"></i>
            </div>
                <span class="project-disclaimer-eyebrow">
                    Academic Project Notice
                </span>

                <h2 id="projectDisclaimerTitle">
                    This is not an official school website.
                </h2>

                <p id="projectDisclaimerDescription">
                    This website was developed as an academic capstone project
                    and is presented for educational and portfolio purposes only.
                    It is not the official website of Cavite State University –
                    Naic Campus or its Laboratory Science High School.
                </p>

                <p class="project-disclaimer-note">
                    School names, logos, and related institutional information
                    displayed on this project are used solely for demonstration
                    of the system.
                </p>

                <button
                    type="button"
                    class="project-disclaimer-btn"
                    data-bs-dismiss="modal"
                >
                    I Understand
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>

        </div>
    </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const navbar = document.getElementById('mainNavbar');

function updateNavbar() {
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
}

window.addEventListener('scroll', updateNavbar);
updateNavbar();
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      once: true
    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const disclaimerElement =
            document.getElementById('projectDisclaimerModal');

        if (!disclaimerElement) return;

        const disclaimerSeen =
            sessionStorage.getItem('lshsProjectDisclaimerSeen');

        if (!disclaimerSeen) {
            const disclaimerModal =
                new bootstrap.Modal(disclaimerElement, {
                    backdrop: 'static',
                    keyboard: false
                });

            disclaimerModal.show();

            disclaimerElement.addEventListener(
                'hidden.bs.modal',
                function () {
                    sessionStorage.setItem(
                        'lshsProjectDisclaimerSeen',
                        'true'
                    );
                },
                { once: true }
            );
        }
    });
</script>

</body>
</html>
