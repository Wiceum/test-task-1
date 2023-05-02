create table messages
(
    id         int auto_increment
        primary key,
    author     text                               null,
    title      text                               null,
    summary    text                               null,
    text       text                               null,
    created_at datetime default CURRENT_TIMESTAMP not null
);

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


