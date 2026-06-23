<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class MaintenanceController extends Controller
{
    public function clear(string $token)
    {
        abort_unless($token === 'INF-01', 403);

        $commands = [
            'optimize:clear',
            'config:cache',
            'route:cache',
            'view:cache',
        ];

        $results = [];
        $overallSuccess = true;

        foreach ($commands as $command) {
            try {
                $exitCode = Artisan::call($command);
                $status = $exitCode === 0 ? 'SUCCESS' : 'FAILED';
                if ($status === 'FAILED')
                    $overallSuccess = false;

                $results[] = [
                    'command' => $command,
                    'status' => $status,
                    'output' => trim(Artisan::output()) ?: '-',
                ];
            } catch (\Throwable $e) {
                $overallSuccess = false;
                $results[] = [
                    'command' => $command,
                    'status' => 'ERROR',
                    'output' => $e->getMessage(),
                ];
            }
        }

        $timestamp = now()->format('d M Y, H:i:s');
        $overallLabel = $overallSuccess ? 'ALL SUCCESS' : 'SOME FAILED';
        $overallClass = $overallSuccess ? 'badge-success' : 'badge-failed';

        $rows = '';
        foreach ($results as $row) {
            $statusClass = strtolower($row['status']);
            $rows .= '
                <tr>
                    <td><code>' . e($row['command']) . '</code></td>
                    <td><span class="badge ' . e($statusClass) . '">' . e($row['status']) . '</span></td>
                    <td class="output">' . nl2br(e($row['output'])) . '</td>
                </tr>';
        }

        $html = <<<HTML
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Maintenance Result</title>
            <style>
                * { box-sizing: border-box; margin: 0; padding: 0; }
                body {
                    font-family: 'Segoe UI', Arial, sans-serif;
                    background: #0f172a;
                    color: #e2e8f0;
                    min-height: 100vh;
                    padding: 40px 20px;
                }
                .container { max-width: 860px; margin: 0 auto; }
                .header {
                    display: flex;
                    align-items: flex-start;
                    justify-content: space-between;
                    flex-wrap: wrap;
                    gap: 12px;
                    margin-bottom: 24px;
                }
                .header-left h1 { font-size: 24px; font-weight: 700; color: #f8fafc; }
                .header-left p { margin-top: 4px; font-size: 13px; color: #64748b; }
                .overall {
                    display: inline-flex;
                    align-items: center;
                    padding: 6px 14px;
                    border-radius: 999px;
                    font-size: 13px;
                    font-weight: 600;
                }
                .badge-success { background: #14532d; color: #4ade80; }
                .badge-failed  { background: #450a0a; color: #f87171; }
                table {
                    width: 100%;
                    border-collapse: collapse;
                    background: #111827;
                    border-radius: 12px;
                    overflow: hidden;
                    box-shadow: 0 4px 24px rgba(0,0,0,0.4);
                }
                thead th {
                    background: #1e293b;
                    color: #94a3b8;
                    font-size: 11px;
                    font-weight: 600;
                    letter-spacing: 0.08em;
                    text-transform: uppercase;
                    padding: 12px 16px;
                    text-align: left;
                }
                tbody tr { border-top: 1px solid #1f2937; transition: background 0.15s; }
                tbody tr:hover { background: #1a2538; }
                td { padding: 14px 16px; font-size: 14px; vertical-align: middle; }
                code {
                    background: #0b1220;
                    padding: 3px 8px;
                    border-radius: 6px;
                    color: #facc15;
                    font-size: 13px;
                    font-family: 'Courier New', monospace;
                }
                .badge {
                    display: inline-block;
                    padding: 3px 10px;
                    border-radius: 999px;
                    font-size: 12px;
                    font-weight: 600;
                }
                .badge.success { background: #14532d; color: #4ade80; }
                .badge.failed  { background: #450a0a; color: #f87171; }
                .badge.error   { background: #3b1515; color: #fca5a5; }
                .output { color: #94a3b8; font-size: 13px; font-family: 'Courier New', monospace; }
                .footer { margin-top: 20px; text-align: right; font-size: 12px; color: #334155; }
                .actions {
                    margin-top: 24px;
                    display: flex;
                    justify-content: flex-end;
                }
                .btn-home {
                    display: inline-flex;
                    align-items: center;
                    gap: 8px;
                    padding: 10px 20px;
                    background: #1e293b;
                    color: #e2e8f0;
                    border-radius: 8px;
                    text-decoration: none;
                    font-size: 14px;
                    font-weight: 500;
                    border: 1px solid #334155;
                    transition: background 0.15s, border-color 0.15s;
                }
                .btn-home:hover {
                    background: #334155;
                    border-color: #475569;
                    color: #f8fafc;
                }
                .btn-home svg { flex-shrink: 0; }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <div class="header-left">
                        <h1>🛠 Maintenance Result</h1>
                        <p>Executed at {$timestamp}</p>
                    </div>
                    <span class="overall {$overallClass}">{$overallLabel}</span>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Command</th>
                            <th>Status</th>
                            <th>Output</th>
                        </tr>
                    </thead>
                    <tbody>
                        {$rows}
                    </tbody>
                </table>
                <div class="footer">PT. Infinity Logistics Indonesia &mdash; Internal Tool</div>
                <div class="actions">
                    <a href="/" class="btn-home">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                        </svg>
                        Back to Home
                    </a>
                </div>
            </div>
        </body>
        </html>
        HTML;

        return response($html)->header('Content-Type', 'text/html');
    }
}