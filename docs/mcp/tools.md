---
title: Available Tools
sidebar_position: 3
---

# MCP Tools Reference

Once connected, Claude has access to the following tools for working with your Shopify data.

## Report Tools

| Tool | Description | Type |
|------|-------------|------|
| `report_list` | List all available reports. Optionally filter by group name. | Read |
| `report_get` | Get the full details of a specific report by its ID. Returns complete report configuration. | Read |
| `report_run` | Run a report and return the query results as JSON. | Read |
| `report_create` | Create a new report with specified configuration. | Write |
| `report_update` | Update an existing report configuration. | Write |
| `report_delete` | Permanently delete a report. This action cannot be undone. | Delete |

### report_list

List all available reports with optional filtering.

**Parameters:**
- `group` (optional): Filter reports by group name

**Returns:** List of reports with ID, title, group, and description.

### report_get

Get complete report configuration.

**Parameters:**
- `report_id` (required): The UUID of the report

**Returns:** Full report configuration including query, visualization settings, and metadata as JSON.

### report_run

Execute a report and get results.

**Parameters:**
- `report_id` (required): The UUID of the report to run

**Returns:** Query results as JSON with columns and rows.

### report_create

Create a new report.

**Parameters:**
- `report_json` (required): Report configuration as JSON string (TsReport structure with title, query, explore, and fields)

**Returns:** Created report ID and title.

### report_update

Update an existing report.

**Parameters:**
- `report_json` (required): Report configuration as JSON string including the `id` field

**Returns:** Updated report ID and title.

### report_delete

Permanently delete a report.

**Parameters:**
- `report_id` (required): The UUID of the report to delete

**Returns:** Confirmation message.

---

## Dashboard Tools

| Tool | Description | Type |
|------|-------------|------|
| `dashboard_list` | List all available dashboards with ID, title, description, and block count. | Read |
| `dashboard_get` | Get the full details of a specific dashboard including blocks, filters, and metadata. | Read |
| `dashboard_create` | Create a new dashboard with specified blocks and configuration. | Write |
| `dashboard_update` | Update an existing dashboard configuration. | Write |
| `dashboard_delete` | Permanently delete a dashboard. This action cannot be undone. | Delete |

### dashboard_list

List all dashboards.

**Parameters:** None

**Returns:** List of dashboards with ID, title, description, and block count.

### dashboard_get

Get complete dashboard configuration.

**Parameters:**
- `dashboard_id` (required): The UUID of the dashboard

**Returns:** Full dashboard configuration including blocks, filters, and metadata as JSON.

### dashboard_create

Create a new dashboard.

**Parameters:**
- `dashboard_json` (required): Dashboard configuration as JSON string (TsDashboard structure with title, blocks, and filters)

**Returns:** Created dashboard ID and title.

### dashboard_update

Update an existing dashboard.

**Parameters:**
- `dashboard_json` (required): Dashboard configuration as JSON string including the `id` field

**Returns:** Updated dashboard ID and title.

### dashboard_delete

Permanently delete a dashboard.

**Parameters:**
- `dashboard_id` (required): The UUID of the dashboard to delete

**Returns:** Confirmation message.

---

## Data Model Tools

| Tool | Description | Type |
|------|-------------|------|
| `datamodel_summary` | Get a compact summary of the schema with all table and column names. | Read |
| `datamodel_get` | Get the full datamodel schema or a specific entity by path. | Read |
| `datamodel_patch` | Apply batch changes to the datamodel schema using JSON Patch operations. | Write |

### datamodel_summary

Get a compact overview of available tables and columns.

**Parameters:** None

**Returns:** Object with:
- `explores`: List of explore names
- `tables`: Map of table names to their labels and column names

Use this to discover available fields for building queries.

### datamodel_get

Get full schema or specific entity.

**Parameters:**
- `path` (optional): Name-based path to get specific entity

**Path Examples:**
- `/tables[name=orders]` — get single table
- `/tables[name=orders]/columns[name=total]` — get single column
- `/tables[name=orders]/datasource` — get datasource config
- `/explores[name=sales]` — get single explore
- `/explores[name=sales]/relationships[to=customers.id]` — get single relationship
- `/crossRelationships[to=refunds.order_id]` — get cross relationship

**Returns:** Full schema (no path) or specific entity as JSON.

### datamodel_patch

Apply batch changes to the schema.

**Parameters:**
- `operations` (required): Array of patch operations

**Operations:**
- `add` — add new entity
- `replace` — update existing value
- `remove` — delete entity

**Path Syntax:**
- `/tables[name=orders]/columns[name=total]/label` — target a column field
- `/tables[name=orders]/columns/-` — append new column (- means append)
- `/explores[name=sales]/relationships[to=customers]` — target a relationship

**Examples:**

Add a column:
```json
{
  "op": "add",
  "path": "/tables[name=orders]/columns/-",
  "value": {
    "name": "discount",
    "kind": "measure",
    "dataType": "float"
  }
}
```

Update a label:
```json
{
  "op": "replace",
  "path": "/tables[name=orders]/columns[name=total]/label",
  "value": "Order Total"
}
```

Delete a column:
```json
{
  "op": "remove",
  "path": "/tables[name=orders]/columns[name=old_field]"
}
```

---

## ACE Expression Tools

| Tool | Description | Type |
|------|-------------|------|
| `ace_validate` | Validate an ACE expression. Returns whether the expression is valid and any error message. | Read |
| `ace_run` | Run/execute an ACE expression and return the result. | Read |

### ace_validate

Check if an ACE expression is valid.

**Parameters:**
- `expression` (required): The ACE expression to validate

**Returns:**
- `valid`: boolean
- `error`: error message (if invalid)

### ace_run

Execute an ACE expression.

**Parameters:**
- `expression` (required): The ACE expression to execute

**Returns:** Query results as JSON.

---

## Tool Categories Summary

### Read-Only Tools (Safe)
These tools only read data and don't modify anything:
- `report_list`, `report_get`, `report_run`
- `dashboard_list`, `dashboard_get`
- `datamodel_summary`, `datamodel_get`
- `ace_validate`, `ace_run`

### Write Tools (Require Caution)
These tools create or modify data:
- `report_create`, `report_update`
- `dashboard_create`, `dashboard_update`
- `datamodel_patch`

### Delete Tools (Destructive)
These tools permanently delete data:
- `report_delete`
- `dashboard_delete`

:::tip Permission Recommendations
In Claude Web, set read-only tools to **Auto-approve** and write/delete tools to **Needs approval** for a safe yet productive workflow.
:::
