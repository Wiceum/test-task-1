create table commentaries
(
    id         int auto_increment
        primary key,
    author     text                               null,
    text       text                               null,
    message_id int                                not null,
    created_at datetime default CURRENT_TIMESTAMP not null,
    constraint message_id
        foreign key (message_id) references messages (id)
            on update cascade on delete cascade
);

INSERT INTO homestead.commentaries (id, author, text, message_id, created_at) VALUES (1, 'admin', 'первый коммент', 11, '2023-05-02 10:34:52');
INSERT INTO homestead.commentaries (id, author, text, message_id, created_at) VALUES (2, 'admin', 'Второй коммент', 11, '2023-05-02 10:37:23');