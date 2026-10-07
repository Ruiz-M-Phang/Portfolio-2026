use `database`; -- uses the selected schema

insert into `projects` -- inserting data into the following colomns of the selected table
    (`name`, `image_url`, `image_alt`, `description`, `url_link`, `github_link`, `first_tag`, `second_tag`)
values 
    ('Muziek Bibliotheek', 'music_library.jpg', 'Een muziek bibliotheek met muziek selectie', 'Een muziek bibliotheek met muziek selectie.', 'www.example.com', 'www.github.com', 'PHP', 'Docker'),
    ('Roomus website', 'Roomus_website.jpg', 'Advertentie website voor Roomus', 'Advertentie website voor Roomus.', 'www.example.com', 'www.github.com', 'HTML', 'CSS'),
    ('Weebsite', 'Weebsite.jpg', 'Fetch request in Javascript', 'Fetch request in Javascript.', 'www.example.com', 'www.github.com', 'HTML', 'CSS');

