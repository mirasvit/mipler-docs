---
title: Example Prompts
sidebar_position: 4
---

# Example Prompts

Here are example prompts you can use with Claude once connected to Mipler via MCP.

## Analyzing Data

```
Show me my top 10 selling products this month
```

```
What's my average order value by country?
```

```
Analyze customer purchase patterns over the last 90 days
```

```
Which products have the highest return rate?
```

```
Compare sales performance: this week vs last week
```

```
What are my best-selling product categories?
```

## Building Reports

```
Create a report showing daily sales for the last 30 days
```

```
Build a report comparing this month vs last month sales by product
```

```
Make a customer cohort analysis report
```

```
Create a report with orders grouped by fulfillment status
```

```
Build a report showing revenue by marketing channel
```

## Creating Dashboards

```
Create a dashboard for daily sales performance with key metrics
```

```
Build an inventory monitoring dashboard
```

```
Make a customer overview dashboard with total customers, new customers this month, and top customers
```

## Working with Data Model

```
Show me what tables and columns are available in my data model
```

```
Add a computed column for profit margin to the orders table
```

```
What explores are available for building reports?
```

```
Show me the structure of the orders table
```

## Running Expressions

```
Calculate total revenue for the last 7 days using ACE
```

```
Validate this expression: orders | summarize(sum(total))
```

## Tips for Better Results

### Be Specific
Instead of:
> "Show me sales"

Try:
> "Show me daily sales for the last 30 days, grouped by product category"

### Provide Context
Instead of:
> "Create a report"

Try:
> "Create a report showing top 20 customers by total order value in the last 90 days"

### Use Filters
Instead of:
> "List all orders"

Try:
> "List orders from the last week with status 'fulfilled' and total over $100"

### Ask for Specific Metrics
Instead of:
> "How are sales?"

Try:
> "What was my total revenue, order count, and average order value last month compared to the previous month?"
