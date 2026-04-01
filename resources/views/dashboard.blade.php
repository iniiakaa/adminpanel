<x-layouts.app active="dashboard" title="Dashboard">
    <div class="dashboard-header">
        <h1 class="page-title">Financial Overview</h1>
        <p class="page-subtitle">REAL-TIME FINANCIAL METRICS AND PORTFOLIO INSIGHTS</p>
    </div>

    <div class="dashboard-grid">
        {{-- Revenue Chart Card --}}
        <div class="card card-chart">
            <div class="card-header">
                <div>
                    <h2 class="card-title">Revenue Trajectory</h2>
                    <p class="card-desc">Monthly income compared to previous quarter</p>
                </div>
                <div class="card-badges">
                    <span class="badge badge-live">LIVE</span>
                    <span class="badge badge-default">Q4 2025</span>
                </div>
            </div>
            <div class="chart-container">
                <div class="chart-bars">
                    <div class="chart-bar-group">
                        <div class="chart-bar" style="height: 45%;">
                            <div class="chart-bar-fill bar-purple"></div>
                        </div>
                        <span class="chart-label">JAN</span>
                    </div>
                    <div class="chart-bar-group">
                        <div class="chart-bar" style="height: 55%;">
                            <div class="chart-bar-fill bar-purple"></div>
                        </div>
                        <span class="chart-label">FEB</span>
                    </div>
                    <div class="chart-bar-group">
                        <div class="chart-bar" style="height: 60%;">
                            <div class="chart-bar-fill bar-purple"></div>
                        </div>
                        <span class="chart-label">MAR</span>
                    </div>
                    <div class="chart-bar-group">
                        <div class="chart-bar" style="height: 85%;">
                            <div class="chart-bar-fill bar-teal"></div>
                        </div>
                        <div class="chart-bar" style="height: 70%;">
                            <div class="chart-bar-fill bar-purple"></div>
                        </div>
                        <span class="chart-label">APR</span>
                    </div>
                    <div class="chart-bar-group">
                        <div class="chart-bar" style="height: 50%;">
                            <div class="chart-bar-fill bar-teal"></div>
                        </div>
                        <div class="chart-bar" style="height: 65%;">
                            <div class="chart-bar-fill bar-purple"></div>
                        </div>
                        <span class="chart-label">MAY</span>
                    </div>
                    <div class="chart-bar-group">
                        <div class="chart-bar" style="height: 40%;">
                            <div class="chart-bar-fill bar-teal"></div>
                        </div>
                        <div class="chart-bar" style="height: 50%;">
                            <div class="chart-bar-fill bar-purple"></div>
                        </div>
                        <span class="chart-label">JUN</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Stats Cards --}}
        <div class="stats-column">
            <div class="card card-stat">
                <div class="stat-icon stat-icon-teal">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-5 h-5">
                        <path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>
                    </svg>
                </div>
                <span class="stat-change stat-up">+18.2%</span>
                <p class="stat-label">TOTAL REVENUE</p>
                <p class="stat-value">Rp 1.24M</p>
            </div>

            <div class="card card-stat">
                <div class="stat-icon stat-icon-purple">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-5 h-5">
                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                        <path d="M1 10h22"/>
                    </svg>
                </div>
                <span class="stat-change stat-down">-Rp 2.1jt</span>
                <p class="stat-label">TOTAL EXPENSES</p>
                <p class="stat-value">Rp 482jt</p>
            </div>

            <div class="card card-stat">
                <div class="stat-icon stat-icon-cyan">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-5 h-5">
                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/>
                        <polyline points="17 6 23 6 23 12"/>
                    </svg>
                </div>
                <span class="stat-change stat-up">+12.4%</span>
                <p class="stat-label">NET PROFIT</p>
                <p class="stat-value">Rp 758jt</p>
            </div>
        </div>
    </div>

    {{-- Bottom Row --}}
    <div class="dashboard-bottom">
        {{-- Recent Transactions --}}
        <div class="card card-activity">
            <h2 class="card-title">Recent Transactions</h2>
            <div class="activity-list">
                <div class="activity-item">
                    <span class="activity-dot dot-green"></span>
                    <div class="activity-info">
                        <p class="activity-text">Payment received - Invoice #1042</p>
                        <p class="activity-time">2 MINUTES AGO</p>
                    </div>
                    <span class="activity-value value-green">+Rp 15.5jt</span>
                </div>
                <div class="activity-item">
                    <span class="activity-dot dot-blue"></span>
                    <div class="activity-info">
                        <p class="activity-text">Transfer to Savings Account</p>
                        <p class="activity-time">1 HOUR AGO</p>
                    </div>
                    <span class="activity-check">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                    </span>
                </div>
                <div class="activity-item">
                    <span class="activity-dot dot-red"></span>
                    <div class="activity-info">
                        <p class="activity-text">Vendor payment - PT Maju Jaya</p>
                        <p class="activity-time">4 HOURS AGO</p>
                    </div>
                    <span class="activity-value value-red">-Rp 3.2jt</span>
                </div>
            </div>
        </div>

        {{-- Budget Utilization --}}
        <div class="card card-workspace">
            <h2 class="card-title">Budget Utilization</h2>
            <p class="card-desc">Monthly budget allocation across departments</p>

            <div class="progress-group">
                <div class="progress-item">
                    <div class="progress-header">
                        <span class="progress-label">OPERATIONAL</span>
                        <span class="progress-value">78%</span>
                    </div>
                    <div class="progress-track">
                        <div class="progress-fill fill-teal" style="width: 78%"></div>
                    </div>
                </div>
                <div class="progress-item">
                    <div class="progress-header">
                        <span class="progress-label">MARKETING</span>
                        <span class="progress-value">52%</span>
                    </div>
                    <div class="progress-track">
                        <div class="progress-fill fill-cyan" style="width: 52%"></div>
                    </div>
                </div>
            </div>

            <button id="btn-optimize" class="btn-optimize">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4">
                    <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6z"/>
                    <path d="M14 2v6h6"/>
                </svg>
                Generate Financial Report
            </button>
        </div>
    </div>
</x-layouts.app>
