---
sidebar_position: 5
title: API Requests — Using MQL Endpoints
sidebar_label: API Requests
slug: /api/requests
---

Mipler gives you direct API access to your data through **MQL (Mipler Query Language)**. This allows you to run the same queries used in your reports programmatically — perfect for custom dashboards, automations, or integrations with your own systems.

---

## Available Endpoints

### `/api/:SECRET/mql{.json, .csv}`

Executes an MQL expression and returns the result in JSON format by default.

**Example:**

```
GET https://app.mipler.com/api/{SECRET}/mql?expr=select_columns(orders, [orders.name, orders.amount]).top_n(5)
```

**Response:**

```json
{
  "success": true,
  "message": "",
  "data": {
    "value": {
      "nCols": 2,
      "nRows": 5,
      "columns": [
        {
          "name": "orders.name",
          "type": "Text"
        },
        {
          "name": "orders.amount",
          "type": "Number"
        }
      ],
      "rows": [
        [
          "#63996",
          "39.00"
        ],
        [
          "#63995",
          "39.00"
        ],
        [
          "#63994",
          "14.00"
        ],
        [
          "#63993",
          "20.00"
        ],
        [
          "#63992",
          "58.00"
        ]
      ]
    },
    "dataType": "table"
  },
  "errors": null
}
```

**Example:**

```
GET https://app.mipler.com/api/{SECRET}/mql.csv?expr=summarize_columns([products.name, orders.count], filter(orders, is_in_range(orders.processed_at, LAST7DAYS))).order_by(desc(orders.count)).top_n(5)
```

**Response:**

```json
name,count
Stillgoods Products,48
Plook Plook,37
POSTCARD 'Sleep In' Scent,29
Tote Bag,29
Hush Hand Sanitiser,28
```

**Example:**

```
POST https://app.mipler.com/api/{SECRET}/mql.csv

{
    "expr": "summarize_columns([products.name, orders.count, order_items.total_quantity], filter(orders, is_in_range(orders.processed_at, LAST7DAYS))).order_by(desc(order_items.total_quantity)).top_n(5)"
}
```

**Response:**

```json
name,count,total_quantity
Stillgoods Products,48,110
Hush Hand Sanitiser,28,64
Plook Plook,37,58
POSTCARD 'Sleep In' Scent,29,33
Tote Bag,29,30
```


## Benefits

* ⚙️ **Universal access** — same data as in your reports, but through an API.
* 🔄 **Always fresh** — results are generated in real time with each request.
* 🧩 **Flexible output** — choose JSON for automations or CSV for spreadsheets.
* 🔐 **Secure** — endpoints are tied to your instance and permissions.

---

## When to use it

* Integrating Mipler data into internal tools or external dashboards.
* Automating workflows via **N8N**, **Zapier**, **Make**, or custom scripts.
* Building your own API-based reporting layer or client.

Mipler’s MQL API endpoints make it simple to **query, transform, and deliver data** wherever you need it — with the same reliability and structure as inside the Mipler app.
