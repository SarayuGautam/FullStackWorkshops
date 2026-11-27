<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sarayu - The Study Portal</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

 <? require_once 'data.php';?>

  <header class="site-header">
    <a href="#home" class="logo">Sarayu<span> - The Study Portal</span></a>
    <nav>
      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#courses">Courses</a></li>
        <li><a href="#resources">Resources</a></li>
        <li><a href="#media">Media</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <div class="layout">
    <main>

      <section id="home" class="hero">
        <div class="hero-text">
          <p class="eyebrow">Free resources for Herald students</p>
          <h1>Learn smarter with The Study Portal</h1>
          <p>Course notes, video lessons, past papers and study tools for your modules, all in one place. Pick a course, follow the resources, and track your progress week by week.</p>
          <a href="#courses" class="button">Browse courses</a>
        </div>
        <img src="images/hero.jpg" alt="Student working on a laptop at a desk">
      </section>

      <section id="courses">
        <h2>Featured Courses</h2>
        <p>Start with one of our most popular courses. Each one has weekly notes, exercises and a short quiz.</p>
        <div class="card-group">
          <? foreach($courses as $course):?>
          <article class="course-card">
            <img src='<?= $course["image"] ?>' alt='<?= $course["altText"]?>'>
            <h3><?= $course["title"]?></h3>
            <p><?= $course["description"]?></p>
            <ul class="course-meta">
              <li>Level: <?= $course["level"]?></li>
              <li>Length: <?= $course["length"]?> weeks</li>
            </ul>
            <a href="#resources">See resources</a>
          </article>
        <? endforeach; ?>
                </div>
      </section>

      <section id="resources">
        <h2>Learning Resources</h2>
        <p>Trusted references and tools we recommend. External links open in a new tab.</p>
        <div class="resource-grid">

          <? foreach($resources as $resource):?>
          <article class="resource">
              <h3><?= $resource["title"]?></h3>
              <p><?= $resource["description"]?></p>
              <a href='<?= $resource["resourceUrl"]?>' target="_blank" rel="noopener"><?= $resource["resourceDescription"]?></a>
          </article>
           <? endforeach; ?>
        </div>
      </section>

      <section id="media">
        <h2>Watch and Listen</h2>
        <p>A short video lesson and a podcast episode to help you revise.</p>
        <div class="media-group">
          <figure>
            <video controls preload="metadata" poster="images/study-desk.jpg">
              <source src="video/lesson.mp4" type="video/mp4">
              Your browser cannot play this video. <a href="video/lesson.mp4">Download the video</a> instead.
            </video>
            <figcaption>Video lesson: how to plan a study session (30 seconds).</figcaption>
          </figure>
          <figure>
            <audio controls preload="metadata">
              <source src="audio/podcast.mp3" type="audio/mpeg">
              Your browser cannot play this audio. <a href="audio/podcast.mp3">Download the episode</a> instead.
            </audio>
            <figcaption>The Study Portal podcast, episode 1: background music for focused revision.</figcaption>
          </figure>
          <figure>
            <img src="images/study-desk.jpg" alt="A tidy study desk with an open notebook, a laptop and a cup of tea">
            <figcaption>A calm, tidy desk helps you focus: set up your study space before each session.</figcaption>
          </figure>
        </div>
      </section>

    </main>

    <aside>
      <h2>Study Corner</h2>
      <h3>Study tips</h3>
      <ol>
        <li>Study in short sessions of 25 minutes.</li>
        <li>Rewrite notes in your own words.</li>
        <li>Test yourself before you reread.</li>
      </ol>
      <h3>Upcoming deadlines</h3>
      <ul>
        <li><strong>Week 2:</strong> HTML quiz</li>
        <li><strong>Week 4:</strong> CSS layout exercise</li>
        <li><strong>Week 8:</strong> Mid-term project</li>
      </ul>
      <h3>Useful links</h3>
      <ul>
        <li><a href="https://www.w3schools.com/" target="_blank" rel="noopener">W3Schools tutorials</a></li>
        <li><a href="https://validator.w3.org/" target="_blank" rel="noopener">Check your HTML</a></li>
      </ul>
    </aside>
  </div>

  <footer id="contact" class="site-footer">
    <div class="footer-col">
      <h2>The Study Portal</h2>
      <p>Free learning resources for Herald College students.</p>
    </div>
    <div class="footer-col">
      <h2>Contact</h2>
      <p>Herald College Kathmandu, Naxal</p>
      <p><a href="mailto:thestudyportal@example.com">thestudyportal@example.com</a></p>
    </div>
    <div class="footer-col">
      <h2>Explore</h2>
      <ul>
        <li><a href="#courses">Courses</a></li>
        <li><a href="#resources">Resources</a></li>
        <li><a href="#media">Media</a></li>
      </ul>
    </div>
    <p class="copyright">&copy; 2026 The Study Portal. Built for the 5CS045 Week 1 workshop.</p>
  </footer>

</body>
</html>
