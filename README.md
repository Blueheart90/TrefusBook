# TrefusBook

DofusBook's Clone for Trefus

## Run Locally

Clone the project

```bash
  git clone
```

Go to the project directory

```bash
  cd trefusbook
```

Install dependencies

```bash
  npm install
```

Start the server

```bash
  npm run start
```

Commands

```bash
sail artisan migrate:reset
sail artisan migrate:fresh --seed
sail artisan app:import-stat-costs database/data/statCost.json
sail artisan app:import-all-data
```
