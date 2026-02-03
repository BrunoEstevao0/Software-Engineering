# [cite_start]Software Engineering Final Project Documentation [cite: 38]

## SDLC Methodology
[cite_start]Este projeto segue o Ciclo de Vida de Desenvolvimento de Software (SDLC) focado em escalabilidade[cite: 38].

## UML Class Diagram (Mermaid)


```mermaid
classDiagram
    class Student {
        +int id
        +String name
        +enroll()
    }
    class Course {
        +int course_id
        +String title
    }
    Student --> Course : Enrolled In
