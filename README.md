# Cedula
## Instalacion
1. Clonar el repositorio git (git clone)
2. Usar comando 'composer install' para descargar dependencias
3. Comando para clonar "git clone (link)"

## Git
### Actualizar repo local
1. git pull origin main

### Subir datos
1. intentar git pull origin main

    * Si estas actualizado o si no hay conflicto a la hora de hacer pull

        1. git add . 
        2. git commit -m "Comentario"
        3. git push origin main

    * Si no estas actualizado o si hay conlflicto a la hora de hacer el pull

        1. git stash
        2. git pull origin main
        3. git stash pop
        4. Resolver conflictos si los hay 
        5. git add . 
        6. git commit -m "Comentario"
        7. git push origin main

    * prueba.prueba
