use `database`; -- uses the selected schema

insert into `projects` -- inserting data into the following colomns of the selected table
    (`name`, `image_url`, `image_alt`, `description`, `url_link`, `github_link`, `first_tag`, `second_tag`)
values 
    ('Muziek Bibliotheek', 'image/projects/music_library.jpg', 'Een muziek bibliotheek met muziek selectie', 'Een muziek bibliotheek met muziek selectie.', 'www.example.com', 'www.github.com', 'PHP', 'Docker'),
    ('Roomus website', 'image/projects/Roomus_website.jpg', 'Advertentie website voor Roomus', 'Advertentie website voor Roomus.', 'www.example.com', 'www.github.com', 'HTML', 'CSS'),
    ('Weebsite', 'image/projects/Weebsite.jpg', 'Fetch request in Javascript', 'Fetch request in Javascript.', 'www.example.com', 'www.github.com', 'HTML', 'CSS'),
    ('BEM Shoppingcard', 'image/projects/BEM_Shoppingcard.png', 'Een shopping page met html en css', 'Een shopping page met html en css gemaakt.', 'https://32931.hosts1.ma-cloud.nl/BEM_Shoppingcard/index.html', 'https://github.com/Ruiz-M-Phang/M4Skill/tree/main/BEM%20Shoppingcard', 'HTML', 'CSS'); -- deze lijn zal ook echte data worden

