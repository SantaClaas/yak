

## How it works
1. Dev Container VS Code extension starts up docker and creates images with Dockerfile and docker compose
2. Docker mounts secret files containing secrets as decribed in docker compose
3. Workspace directory is mounted
4. Dev container runs post create command and copies wordpress config to wordpress directory
    - wordpress config refers to environment variables to find secrets mounted by docker
5. Wordpress config is run and reads secrets from mounted docker secrets files and connects to PlanetScale database