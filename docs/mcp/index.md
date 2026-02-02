---
title: MCP Server
sidebar_position: 1
---

# MCP Server Overview

The Model Context Protocol (MCP) is an open standard developed by Anthropic that allows AI applications like Claude to securely connect to external data sources. With Mipler MCP Server, you can connect Claude directly to your Shopify store data and perform analytics, build reports, and get business insights through natural conversation.

## What You Can Do with MCP

- **Analyze Data** — Ask questions about your Shopify store in natural language
- **Build Reports** — Create custom reports through conversation
- **Create Dashboards** — Design dashboards by describing what you need
- **Modify Data Model** — Add computed columns and customize your schema
- **Run Expressions** — Execute ACE expressions for custom calculations

## Supported Clients

Mipler MCP Server works with any MCP-compatible client:

| Client | Platform | Description |
|--------|----------|-------------|
| Claude Desktop | macOS, Windows | Anthropic's official desktop application |
| Claude Web | Browser | Use Claude at claude.ai |
| Claude Code | CLI | Command-line interface for developers |

## Getting Started

1. [Get your MCP Connection URL](./setup#get-mcp-url) from Mipler Settings
2. [Configure your client](./setup#configuration) (Claude Desktop, Web, or Code)
3. [Start using MCP tools](./tools) to work with your data

## Security

- Your MCP Connection URL contains a unique access key — keep it private
- All connections are encrypted via HTTPS
- Claude accesses data through Mipler's secure API
- Your Shopify credentials are never shared directly with Claude
