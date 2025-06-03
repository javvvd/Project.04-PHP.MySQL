CREATE TABLE IF NOT EXISTS blog_posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO blog_posts (title, content) VALUES
('Manfaat PushUP', 'Push-up merupakan salah satu olahraga sederhana namun sangat efektif untuk meningkatkan kekuatan tubuh, terutama pada otot dada, bahu, lengan, dan inti. Gerakan ini membantu membangun daya tahan otot, meningkatkan stabilitas tubuh, serta memperbaiki postur. Selain itu, push-up juga dapat meningkatkan kesehatan jantung dengan memperlancar sirkulasi darah dan membakar kalori, sehingga berkontribusi dalam menjaga berat badan ideal. Tidak hanya bermanfaat bagi fisik, push-up juga dapat meningkatkan kekuatan mental dengan melatih disiplin dan ketahanan. Dengan rutin melakukan push-up, tubuh menjadi lebih bugar, kuat, dan siap menghadapi aktivitas sehari-hari dengan lebih baik.'),
('Sejarah Singkat Samsung', 'Samsung adalah salah satu perusahaan teknologi ...'),
('Manfaat Air Putih', 'Minum air putih memiliki banyak manfaat ...');
