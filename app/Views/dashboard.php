<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GLTIdesk — Visão Geral</title>

<link rel="icon" href="/public/assets/img/logo/gltidesk-icon.svg" type="image/svg+xml">
<link rel="stylesheet" href="/public/assets/css/dash/dashboard.css">

<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
</head>
<body>

<!-- ================= APP ================= -->
<div class="app" id="app">

  <!-- ================= SIDEBAR ================= -->
  <aside class="sidebar" id="sidebar" aria-label="Navegação principal">

    <div class="sidebar-header">
      <a href="#" class="sidebar-logo" aria-label="GLTIdesk">
        <img src="/public/assets/img/logo_navbar.png" alt="GLTIdesk" class="logo-full">
        <img src="/public/assets/img/logo_navbar.png" alt="GLTIdesk" class="logo-mini">
      </a>
      <button class="sidebar-collapse" id="sidebarCollapse" aria-label="Recolher menu">
        <i data-lucide="chevron-left"></i>
      </button>
    </div>

    <nav class="sidebar-nav" aria-label="Menu lateral">

      <div class="nav-group">
        <p class="nav-group-title">Principal</p>

        <a href="#" class="nav-item active" data-tooltip="Início">
          <i data-lucide="layout-dashboard"></i>
          <span>Início</span>
        </a>

        <a href="#" class="nav-item" data-tooltip="Chamados">
          <i data-lucide="ticket"></i>
          <span>Chamados</span>
          <em class="nav-badge">12</em>
        </a>

        <a href="#" class="nav-item" data-tooltip="Tasks">
          <i data-lucide="list-checks"></i>
          <span>Tasks</span>
        </a>

        <a href="#" class="nav-item" data-tooltip="Atendimentos">
          <i data-lucide="headset"></i>
          <span>Atendimentos</span>
        </a>
      </div>

      <div class="nav-group">
        <p class="nav-group-title">Gestão</p>

        <a href="#" class="nav-item" data-tooltip="Clientes">
          <i data-lucide="building-2"></i>
          <span>Clientes</span>
        </a>

        <a href="#" class="nav-item" data-tooltip="Usuários">
          <i data-lucide="users"></i>
          <span>Usuários</span>
        </a>

        <a href="#" class="nav-item" data-tooltip="Técnicos de TI">
          <i data-lucide="user-cog"></i>
          <span>Técnicos de TI</span>
        </a>

        <a href="#" class="nav-item" data-tooltip="Equipes">
          <i data-lucide="users-round"></i>
          <span>Equipes</span>
        </a>
      </div>

      <div class="nav-group">
        <p class="nav-group-title">Infraestrutura</p>

        <a href="#" class="nav-item" data-tooltip="Inventário / Ativos">
          <i data-lucide="package"></i>
          <span>Inventário / Ativos</span>
        </a>

        <a href="#" class="nav-item" data-tooltip="Estoque">
          <i data-lucide="boxes"></i>
          <span>Estoque</span>
        </a>

        <a href="#" class="nav-item" data-tooltip="Dispositivos">
          <i data-lucide="monitor"></i>
          <span>Dispositivos</span>
        </a>

        <a href="#" class="nav-item" data-tooltip="Monitoramento Geral">
          <i data-lucide="activity"></i>
          <span>Monitoramento Geral</span>
        </a>

        <a href="#" class="nav-item" data-tooltip="Servidores">
          <i data-lucide="server"></i>
          <span>Servidores</span>
        </a>

        <a href="#" class="nav-item" data-tooltip="Rede">
          <i data-lucide="network"></i>
          <span>Rede</span>
        </a>

        <a href="#" class="nav-item" data-tooltip="Alertas">
          <i data-lucide="bell-ring"></i>
          <span>Alertas</span>
          <em class="nav-badge nav-badge-warn">7</em>
        </a>
      </div>

      <div class="nav-group">
        <p class="nav-group-title">Conhecimento</p>

        <a href="#" class="nav-item" data-tooltip="Base de Conhecimento">
          <i data-lucide="book-open"></i>
          <span>Base de Conhecimento</span>
        </a>

        <a href="#" class="nav-item" data-tooltip="Produtos / Links">
          <i data-lucide="link"></i>
          <span>Produtos / Links</span>
        </a>

        <a href="#" class="nav-item" data-tooltip="Documentação">
          <i data-lucide="file-text"></i>
          <span>Documentação</span>
        </a>
      </div>

      <div class="nav-group">
        <p class="nav-group-title">Análise</p>

        <a href="#" class="nav-item" data-tooltip="Relatórios">
          <i data-lucide="bar-chart-3"></i>
          <span>Relatórios</span>
        </a>

        <a href="#" class="nav-item" data-tooltip="Histórico">
          <i data-lucide="history"></i>
          <span>Histórico</span>
        </a>
      </div>

      <div class="nav-group">
        <p class="nav-group-title">Sistema</p>

        <a href="#" class="nav-item" data-tooltip="Integrações">
          <i data-lucide="plug"></i>
          <span>Integrações</span>
        </a>

        <a href="#" class="nav-item" data-tooltip="Logs">
          <i data-lucide="scroll-text"></i>
          <span>Logs</span>
        </a>

        <a href="#" class="nav-item" data-tooltip="Configurações">
          <i data-lucide="settings"></i>
          <span>Configurações</span>
        </a>
      </div>

    </nav>

    <!-- Usuário -->
    <div class="sidebar-user" id="userMenuBtn" tabindex="0">
      <div class="user-avatar">AR</div>
      <div class="user-info">
        <strong>Arthur Reis</strong>
        <small>Administrador</small>
      </div>
      <i data-lucide="settings" class="user-cog"></i>

      <div class="user-dropdown" id="userDropdown" role="menu">
        <a href="#" role="menuitem"><i data-lucide="user"></i> Meu perfil</a>
        <a href="#" role="menuitem"><i data-lucide="sliders-horizontal"></i> Preferências</a>
        <hr>
        <a href="#" role="menuitem" class="danger"><i data-lucide="log-out"></i> Sair</a>
      </div>
    </div>

  </aside>

  <!-- Overlay mobile -->
  <div class="sidebar-overlay" id="sidebarOverlay"></div>

  <!-- ================= MAIN ================= -->
  <div class="main">

    <!-- ================= TOPBAR ================= -->
    <header class="topbar">

      <div class="topbar-left">
        <button class="icon-btn menu-toggle" id="menuToggle" aria-label="Abrir menu">
          <i data-lucide="menu"></i>
        </button>

        <div class="breadcrumb">
          <span class="breadcrumb-root">GLTIdesk</span>
          <i data-lucide="chevron-right"></i>
          <span class="breadcrumb-current">Visão Geral</span>
        </div>
      </div>

      <div class="topbar-center">
        <div class="global-search">
          <i data-lucide="search"></i>
          <input type="search" placeholder="Pesquisar chamados, clientes ou dispositivos...">
          <kbd>⌘K</kbd>
        </div>
      </div>

      <div class="topbar-right">
        <button class="btn btn-primary">
          <i data-lucide="plus"></i>
          <span>Novo chamado</span>
        </button>

        <div class="dropdown">
          <button class="icon-btn" id="notifBtn" aria-label="Notificações">
            <i data-lucide="bell"></i>
            <em class="dot-badge">5</em>
          </button>
          <div class="dropdown-panel notif-panel" id="notifPanel">
            <header class="dropdown-header">
              <strong>Notificações</strong>
              <button class="link-muted">Marcar como lidas</button>
            </header>
            <ul class="notif-list">
              <li class="notif-item critico">
                <i data-lucide="triangle-alert"></i>
                <div>
                  <p>SRV-BACKUP-02 deixou de responder</p>
                  <small>há 8 min</small>
                </div>
              </li>
              <li class="notif-item atencao">
                <i data-lucide="hard-drive"></i>
                <div>
                  <p>PC-FIN-023 com disco em 94%</p>
                  <small>há 3 min</small>
                </div>
              </li>
              <li class="notif-item info">
                <i data-lucide="ticket"></i>
                <div>
                  <p>Novo chamado atribuído a você</p>
                  <small>há 12 min</small>
                </div>
              </li>
              <li class="notif-item">
                <i data-lucide="monitor-plus"></i>
                <div>
                  <p>Novo dispositivo registrado</p>
                  <small>há 12 min</small>
                </div>
              </li>
            </ul>
            <footer class="dropdown-footer">
              <a href="#">Ver todas as notificações</a>
            </footer>
          </div>
        </div>

        <button class="icon-btn" aria-label="Ajuda">
          <i data-lucide="circle-help"></i>
        </button>

        <div class="topbar-avatar">AR</div>
      </div>

    </header>

    <!-- ================= CONTENT ================= -->
    <main class="content">

      <!-- Cabeçalho -->
      <section class="page-header">
        <div class="page-header-text">
          <h1>Visão Geral</h1>
          <p>Acompanhe atendimentos, infraestrutura e atividades da sua operação.</p>
          <small class="last-update">
            <i data-lucide="clock"></i> Última atualização: agora
          </small>
        </div>
        <div class="page-header-actions">
          <button class="btn btn-outline">
            <i data-lucide="refresh-cw"></i>
            <span>Atualizar dados</span>
          </button>
          <button class="btn btn-primary">
            <i data-lucide="plus"></i>
            <span>Novo chamado</span>
          </button>
        </div>
      </section>

      <!-- ============= KPI CARDS ============= -->
      <section class="kpi-grid">

        <article class="kpi-card">
          <div class="kpi-icon kpi-blue"><i data-lucide="ticket"></i></div>
          <div class="kpi-body">
            <small>Chamados abertos</small>
            <strong>24</strong>
            <span class="kpi-trend up"><i data-lucide="trending-up"></i> +3 hoje</span>
          </div>
        </article>

        <article class="kpi-card">
          <div class="kpi-icon kpi-cyan"><i data-lucide="headset"></i></div>
          <div class="kpi-body">
            <small>Em atendimento</small>
            <strong>8</strong>
            <span class="kpi-trend muted">4 técnicos ativos</span>
          </div>
        </article>

        <article class="kpi-card">
          <div class="kpi-icon kpi-red"><i data-lucide="triangle-alert"></i></div>
          <div class="kpi-body">
            <small>Chamados críticos</small>
            <strong>3</strong>
            <span class="kpi-trend down">Requer atenção</span>
          </div>
        </article>

        <article class="kpi-card">
          <div class="kpi-icon kpi-green"><i data-lucide="monitor"></i></div>
          <div class="kpi-body">
            <small>Dispositivos monitorados</small>
            <strong>148</strong>
            <span class="kpi-trend up">142 online</span>
          </div>
        </article>

        <article class="kpi-card">
          <div class="kpi-icon kpi-purple"><i data-lucide="server"></i></div>
          <div class="kpi-body">
            <small>Servidores</small>
            <strong>12</strong>
            <span class="kpi-trend up">11 saudáveis</span>
          </div>
        </article>

        <article class="kpi-card">
          <div class="kpi-icon kpi-amber"><i data-lucide="bell-ring"></i></div>
          <div class="kpi-body">
            <small>Alertas ativos</small>
            <strong>7</strong>
            <span class="kpi-trend warn">3 de alta prioridade</span>
          </div>
        </article>

      </section>

      <!-- ============= GRID PRINCIPAL ============= -->
      <section class="dash-grid">

        <!-- Gráfico de chamados -->
        <article class="card card-span-2">
          <header class="card-header">
            <div>
              <h3>Chamados nos últimos 7 dias</h3>
              <p>Abertos x resolvidos</p>
            </div>
            <div class="chip-group">
              <button class="chip active" data-range="7">7 dias</button>
              <button class="chip" data-range="30">30 dias</button>
            </div>
          </header>
          <div class="chart-wrap">
            <canvas id="chartChamados"></canvas>
          </div>
        </article>

        <!-- Status donut -->
        <article class="card">
          <header class="card-header">
            <div>
              <h3>Status dos chamados</h3>
              <p>Distribuição atual</p>
            </div>
          </header>
          <div class="chart-donut-wrap">
            <canvas id="chartStatus"></canvas>
            <div class="donut-center">
              <strong>80</strong>
              <small>total</small>
            </div>
          </div>
          <ul class="donut-legend">
            <li><span class="dot dot-blue"></span> Abertos <em>24</em></li>
            <li><span class="dot dot-cyan"></span> Em atendimento <em>8</em></li>
            <li><span class="dot dot-amber"></span> Aguardando <em>6</em></li>
            <li><span class="dot dot-green"></span> Resolvidos <em>42</em></li>
          </ul>
        </article>

        <!-- Status da infraestrutura -->
        <article class="card">
          <header class="card-header">
            <div>
              <h3>Status da infraestrutura</h3>
              <p>Visão consolidada</p>
            </div>
          </header>

          <div class="status-list">
            <div class="status-item">
              <div class="status-line">
                <span><i data-lucide="monitor"></i> Dispositivos</span>
                <strong>142 / 148 online</strong>
              </div>
              <div class="progress"><span style="width: 96%" class="progress-green"></span></div>
            </div>

            <div class="status-item">
              <div class="status-line">
                <span><i data-lucide="server"></i> Servidores</span>
                <strong>11 / 12 online</strong>
              </div>
              <div class="progress"><span style="width: 92%" class="progress-green"></span></div>
            </div>

            <div class="status-item">
              <div class="status-line">
                <span><i data-lucide="plug"></i> Serviços</span>
                <strong>27 / 28 operacionais</strong>
              </div>
              <div class="progress"><span style="width: 96%" class="progress-blue"></span></div>
            </div>

            <div class="status-item">
              <div class="status-line">
                <span><i data-lucide="cpu"></i> Agentes GLTIdesk</span>
                <strong>139 conectados</strong>
              </div>
              <div class="progress"><span style="width: 94%" class="progress-purple"></span></div>
            </div>
          </div>

          <footer class="status-footer">
            <span class="badge badge-green">Saudável</span>
            <span class="badge badge-amber">Atenção</span>
            <span class="badge badge-red">Crítico</span>
          </footer>
        </article>

        <!-- Saúde da operação -->
        <article class="card health-card">
          <header class="card-header">
            <div>
              <h3>Saúde da operação</h3>
              <p>Indicador consolidado</p>
            </div>
          </header>

          <div class="health-ring">
            <canvas id="chartHealth"></canvas>
            <div class="health-center">
              <strong>92%</strong>
              <small>saudável</small>
            </div>
          </div>
          <p class="health-note">
            <i data-lucide="triangle-alert"></i> 7 alertas requerem atenção.
          </p>
        </article>

        <!-- Chamados recentes -->
        <article class="card card-span-3">
          <header class="card-header">
            <div>
              <h3>Chamados recentes</h3>
              <p>Últimos atendimentos registrados</p>
            </div>
            <a href="#" class="link-muted">Ver todos <i data-lucide="arrow-right"></i></a>
          </header>

          <div class="table-wrap">
            <table class="data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Chamado</th>
                  <th>Cliente</th>
                  <th>Técnico</th>
                  <th>Prioridade</th>
                  <th>Status</th>
                  <th>Atualização</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-label="ID"><strong>#GLTI-1048</strong></td>
                  <td data-label="Chamado">Computador não inicia</td>
                  <td data-label="Cliente">MODUP Tecnologia</td>
                  <td data-label="Técnico">Carlos Lima</td>
                  <td data-label="Prioridade"><span class="badge badge-red">Alta</span></td>
                  <td data-label="Status"><span class="badge badge-blue">Em atendimento</span></td>
                  <td data-label="Atualização" class="muted">5 min</td>
                </tr>
                <tr>
                  <td data-label="ID"><strong>#GLTI-1047</strong></td>
                  <td data-label="Chamado">Falha de conexão com servidor</td>
                  <td data-label="Cliente">AgendWork</td>
                  <td data-label="Técnico">Arthur Reis</td>
                  <td data-label="Prioridade"><span class="badge badge-red">Crítica</span></td>
                  <td data-label="Status"><span class="badge badge-blue">Aberto</span></td>
                  <td data-label="Atualização" class="muted">12 min</td>
                </tr>
                <tr>
                  <td data-label="ID"><strong>#GLTI-1046</strong></td>
                  <td data-label="Chamado">Instalação de software</td>
                  <td data-label="Cliente">Empresa Alpha</td>
                  <td data-label="Técnico">Mariana Costa</td>
                  <td data-label="Prioridade"><span class="badge badge-gray">Normal</span></td>
                  <td data-label="Status"><span class="badge badge-amber">Aguardando</span></td>
                  <td data-label="Atualização" class="muted">28 min</td>
                </tr>
                <tr>
                  <td data-label="ID"><strong>#GLTI-1045</strong></td>
                  <td data-label="Chamado">E-mail corporativo não sincroniza</td>
                  <td data-label="Cliente">Grupo Horizonte</td>
                  <td data-label="Técnico">Lucas Martins</td>
                  <td data-label="Prioridade"><span class="badge badge-amber">Alta</span></td>
                  <td data-label="Status"><span class="badge badge-blue">Em atendimento</span></td>
                  <td data-label="Atualização" class="muted">34 min</td>
                </tr>
                <tr>
                  <td data-label="ID"><strong>#GLTI-1044</strong></td>
                  <td data-label="Chamado">Impressora de rede offline</td>
                  <td data-label="Cliente">MODUP Tecnologia</td>
                  <td data-label="Técnico">Carlos Lima</td>
                  <td data-label="Prioridade"><span class="badge badge-gray">Baixa</span></td>
                  <td data-label="Status"><span class="badge badge-green">Resolvido</span></td>
                  <td data-label="Atualização" class="muted">1 h</td>
                </tr>
              </tbody>
            </table>
          </div>
        </article>

        <!-- Monitoramento -->
        <article class="card card-span-2">
          <header class="card-header">
            <div>
              <h3>Monitoramento Geral</h3>
              <p>Dispositivos com agente GLTIdesk</p>
            </div>
            <a href="#" class="link-muted">Ver todos <i data-lucide="arrow-right"></i></a>
          </header>

          <div class="device-grid">

            <div class="device-card">
              <header>
                <strong>SRV-GLTI-01</strong>
                <span class="badge badge-green">Saudável</span>
              </header>
              <small class="device-type"><i data-lucide="server"></i> Servidor</small>
              <ul class="device-metrics">
                <li><span>CPU</span><div class="progress"><span style="width:34%" class="progress-blue"></span></div><em>34%</em></li>
                <li><span>RAM</span><div class="progress"><span style="width:62%" class="progress-blue"></span></div><em>62%</em></li>
                <li><span>Disco</span><div class="progress"><span style="width:71%" class="progress-amber"></span></div><em>71%</em></li>
              </ul>
              <footer>Uptime <strong>47 dias</strong></footer>
            </div>

            <div class="device-card">
              <header>
                <strong>PC-FIN-023</strong>
                <span class="badge badge-amber">Atenção</span>
              </header>
              <small class="device-type"><i data-lucide="monitor"></i> Windows 11</small>
              <ul class="device-metrics">
                <li><span>CPU</span><div class="progress"><span style="width:72%" class="progress-amber"></span></div><em>72%</em></li>
                <li><span>RAM</span><div class="progress"><span style="width:89%" class="progress-red"></span></div><em>89%</em></li>
                <li><span>Disco</span><div class="progress"><span style="width:94%" class="progress-red"></span></div><em>94%</em></li>
              </ul>
              <footer class="device-alert"><i data-lucide="triangle-alert"></i> Pouco espaço disponível em disco.</footer>
            </div>

            <div class="device-card">
              <header>
                <strong>PC-RH-011</strong>
                <span class="badge badge-red">Offline</span>
              </header>
              <small class="device-type"><i data-lucide="monitor"></i> Windows 11</small>
              <ul class="device-metrics muted">
                <li><span>CPU</span><div class="progress"><span style="width:0%" class="progress-muted"></span></div><em>—</em></li>
                <li><span>RAM</span><div class="progress"><span style="width:0%" class="progress-muted"></span></div><em>—</em></li>
                <li><span>Disco</span><div class="progress"><span style="width:0%" class="progress-muted"></span></div><em>—</em></li>
              </ul>
              <footer class="muted">Última comunicação: 18 min atrás</footer>
            </div>

            <div class="device-card">
              <header>
                <strong>NOTE-DIR-004</strong>
                <span class="badge badge-green">Saudável</span>
              </header>
              <small class="device-type"><i data-lucide="monitor"></i> Windows 11</small>
              <ul class="device-metrics">
                <li><span>CPU</span><div class="progress"><span style="width:18%" class="progress-blue"></span></div><em>18%</em></li>
                <li><span>RAM</span><div class="progress"><span style="width:41%" class="progress-blue"></span></div><em>41%</em></li>
                <li><span>Disco</span><div class="progress"><span style="width:57%" class="progress-green"></span></div><em>57%</em></li>
              </ul>
              <footer>Uptime <strong>6 dias</strong></footer>
            </div>

          </div>
        </article>

        <!-- Alertas -->
        <article class="card">
          <header class="card-header">
            <div>
              <h3>Alertas recentes</h3>
              <p>Últimos eventos do sistema</p>
            </div>
            <a href="#" class="link-muted">Ver todos</a>
          </header>

          <ul class="alert-list">
            <li class="alert-item critico">
              <span class="alert-icon"><i data-lucide="server"></i></span>
              <div>
                <strong>Servidor sem resposta</strong>
                <p>SRV-BACKUP-02</p>
                <small>há 8 min</small>
              </div>
              <span class="badge badge-red">Crítico</span>
            </li>
            <li class="alert-item atencao">
              <span class="alert-icon"><i data-lucide="hard-drive"></i></span>
              <div>
                <strong>Disco quase cheio</strong>
                <p>PC-FIN-023 · 94% utilizado</p>
                <small>há 3 min</small>
              </div>
              <span class="badge badge-red">Alta</span>
            </li>
            <li class="alert-item info">
              <span class="alert-icon"><i data-lucide="activity"></i></span>
              <div>
                <strong>Memória elevada</strong>
                <p>PC-ADM-014 · 91% de RAM</p>
                <small>há 14 min</small>
              </div>
              <span class="badge badge-amber">Média</span>
            </li>
            <li class="alert-item">
              <span class="alert-icon"><i data-lucide="cpu"></i></span>
              <div>
                <strong>Agent desatualizado</strong>
                <p>PC-COM-031</p>
                <small>há 32 min</small>
              </div>
              <span class="badge badge-gray">Baixa</span>
            </li>
          </ul>
        </article>

        <!-- Servidores -->
        <article class="card">
          <header class="card-header">
            <div>
              <h3>Servidores</h3>
              <p>Monitoramento em tempo real</p>
            </div>
            <a href="#" class="link-muted">Ver servidores</a>
          </header>

          <ul class="server-list">
            <li>
              <div class="server-head">
                <strong>SRV-GLTI-01</strong>
                <span class="badge badge-green">Online</span>
              </div>
              <div class="server-metrics">
                <span>CPU <em>34%</em></span>
                <span>RAM <em>62%</em></span>
                <span>Uptime <em>47d</em></span>
              </div>
            </li>
            <li>
              <div class="server-head">
                <strong>SRV-DATABASE-01</strong>
                <span class="badge badge-green">Online</span>
              </div>
              <div class="server-metrics">
                <span>CPU <em>48%</em></span>
                <span>RAM <em>71%</em></span>
                <span>Uptime <em>22d</em></span>
              </div>
            </li>
            <li>
              <div class="server-head">
                <strong>SRV-BACKUP-02</strong>
                <span class="badge badge-red">Offline</span>
              </div>
              <div class="server-metrics muted">
                <span>Última resposta há <em>8 min</em></span>
              </div>
            </li>
          </ul>
        </article>

        <!-- Estoque -->
        <article class="card">
          <header class="card-header">
            <div>
              <h3>Estoque de TI</h3>
              <p>Itens disponíveis</p>
            </div>
            <a href="#" class="link-muted">Gerenciar estoque</a>
          </header>

          <ul class="stock-list">
            <li>
              <span class="stock-icon"><i data-lucide="hard-drive"></i></span>
              <div><strong>SSD 480 GB</strong><small>8 unidades</small></div>
            </li>
            <li>
              <span class="stock-icon"><i data-lucide="memory-stick"></i></span>
              <div><strong>Memória DDR4 8 GB</strong><small>14 unidades</small></div>
            </li>
            <li>
              <span class="stock-icon"><i data-lucide="mouse"></i></span>
              <div><strong>Mouse USB</strong><small>23 unidades</small></div>
            </li>
            <li>
              <span class="stock-icon"><i data-lucide="keyboard"></i></span>
              <div><strong>Teclado USB</strong><small>17 unidades</small></div>
            </li>
          </ul>

          <div class="stock-warn">
            <i data-lucide="triangle-alert"></i>
            3 itens com estoque baixo
          </div>
        </article>

        <!-- Tasks -->
        <article class="card">
          <header class="card-header">
            <div>
              <h3>Minhas Tasks</h3>
              <p>Atividades atribuídas a você</p>
            </div>
          </header>

          <ul class="task-list">
            <li>
              <label class="task-check"><input type="checkbox"><span></span></label>
              <div>
                <p>Revisar backup do servidor</p>
                <small><span class="badge badge-red">Alta</span> Hoje</small>
              </div>
            </li>
            <li>
              <label class="task-check"><input type="checkbox"><span></span></label>
              <div>
                <p>Atualizar PC Financeiro 04</p>
                <small><span class="badge badge-amber">Média</span> Hoje</small>
              </div>
            </li>
            <li>
              <label class="task-check"><input type="checkbox" checked><span></span></label>
              <div>
                <p class="done">Finalizar chamado #1042</p>
                <small><span class="badge badge-gray">Baixa</span> Ontem</small>
              </div>
            </li>
            <li>
              <label class="task-check"><input type="checkbox"><span></span></label>
              <div>
                <p>Conferir estoque de SSD</p>
                <small><span class="badge badge-gray">Baixa</span> Amanhã</small>
              </div>
            </li>
            <li>
              <label class="task-check"><input type="checkbox"><span></span></label>
              <div>
                <p>Instalar GLTIdesk Agent em 3 máquinas</p>
                <small><span class="badge badge-amber">Média</span> Esta semana</small>
              </div>
            </li>
          </ul>
        </article>

        <!-- Técnicos -->
        <article class="card">
          <header class="card-header">
            <div>
              <h3>Equipe de TI</h3>
              <p>Status em tempo real</p>
            </div>
          </header>

          <ul class="team-list">
            <li>
              <span class="avatar avatar-green">AR</span>
              <div><strong>Arthur Reis</strong><small class="online">Online</small></div>
              <em>5 chamados</em>
            </li>
            <li>
              <span class="avatar avatar-blue">CL</span>
              <div><strong>Carlos Lima</strong><small class="busy">Em atendimento</small></div>
              <em>3 chamados</em>
            </li>
            <li>
              <span class="avatar avatar-green">MC</span>
              <div><strong>Mariana Costa</strong><small class="online">Online</small></div>
              <em>4 chamados</em>
            </li>
            <li>
              <span class="avatar avatar-gray">LM</span>
              <div><strong>Lucas Martins</strong><small class="off">Ausente</small></div>
              <em>1 chamado</em>
            </li>
          </ul>
        </article>

        <!-- Atividade recente -->
        <article class="card">
          <header class="card-header">
            <div>
              <h3>Atividade recente</h3>
              <p>Últimos eventos da plataforma</p>
            </div>
          </header>

          <ul class="timeline">
            <li>
              <span class="timeline-dot dot-green"></span>
              <div>
                <p><strong>Arthur Reis</strong> concluiu o chamado <strong>#1041</strong></p>
                <small>2 min</small>
              </div>
            </li>
            <li>
              <span class="timeline-dot dot-amber"></span>
              <div>
                <p>GLTIdesk Agent detectou pouco espaço em <strong>PC-FIN-023</strong></p>
                <small>3 min</small>
              </div>
            </li>
            <li>
              <span class="timeline-dot dot-blue"></span>
              <div>
                <p><strong>Carlos Lima</strong> iniciou atendimento <strong>#1048</strong></p>
                <small>5 min</small>
              </div>
            </li>
            <li>
              <span class="timeline-dot dot-blue"></span>
              <div>
                <p>Novo dispositivo registrado: <strong>PC-COM-034</strong></p>
                <small>12 min</small>
              </div>
            </li>
            <li>
              <span class="timeline-dot dot-red"></span>
              <div>
                <p><strong>SRV-BACKUP-02</strong> deixou de responder</p>
                <small>18 min</small>
              </div>
            </li>
          </ul>
        </article>

        <!-- Dispositivos resumo -->
        <article class="card">
          <header class="card-header">
            <div>
              <h3>Dispositivos</h3>
              <p>Inventário por sistema</p>
            </div>
            <a href="#" class="link-muted">Ver inventário</a>
          </header>

          <ul class="os-list">
            <li>
              <span class="os-icon"><i data-lucide="monitor"></i></span>
              <div><strong>Windows</strong><small>118</small></div>
            </li>
            <li>
              <span class="os-icon"><i data-lucide="terminal"></i></span>
              <div><strong>Linux</strong><small>24</small></div>
            </li>
            <li>
              <span class="os-icon"><i data-lucide="laptop"></i></span>
              <div><strong>macOS</strong><small>6</small></div>
            </li>
          </ul>
          <footer class="os-total">
            <span>Total</span>
            <strong>148</strong>
          </footer>
        </article>

        <!-- GLTIdesk Agent -->
        <article class="card">
          <header class="card-header">
            <div>
              <h3>GLTIdesk Agent</h3>
              <p>Monitoramento distribuído</p>
            </div>
            <a href="#" class="link-muted">Ver agentes</a>
          </header>

          <ul class="agent-list">
            <li><span class="badge badge-green">Online</span><strong>139</strong></li>
            <li><span class="badge badge-red">Offline</span><strong>5</strong></li>
            <li><span class="badge badge-amber">Desatualizados</span><strong>4</strong></li>
          </ul>

          <div class="agent-version">
            <i data-lucide="tag"></i>
            Versão atual <strong>v0.1.0</strong>
          </div>
        </article>

        <!-- Acesso rápido -->
        <article class="card card-span-3">
          <header class="card-header">
            <div>
              <h3>Acesso rápido</h3>
              <p>Ações frequentes da operação</p>
            </div>
          </header>

          <div class="quick-grid">
            <a href="#" class="quick-item"><i data-lucide="plus-circle"></i><span>Novo chamado</span></a>
            <a href="#" class="quick-item"><i data-lucide="building-2"></i><span>Novo cliente</span></a>
            <a href="#" class="quick-item"><i data-lucide="monitor-plus"></i><span>Adicionar dispositivo</span></a>
            <a href="#" class="quick-item"><i data-lucide="package-plus"></i><span>Cadastrar item</span></a>
            <a href="#" class="quick-item"><i data-lucide="user-cog"></i><span>Gerenciar técnicos</span></a>
            <a href="#" class="quick-item"><i data-lucide="bar-chart-3"></i><span>Relatórios</span></a>
            <a href="#" class="quick-item"><i data-lucide="book-open"></i><span>Base de conhecimento</span></a>
            <a href="#" class="quick-item"><i data-lucide="activity"></i><span>Monitoramento</span></a>
          </div>
        </article>

      </section>

    </main>

    <footer class="main-footer">
      <span>GLTIdesk · v0.1.0 — Open Source Help Desk &amp; IT Management</span>
      <span>© <span id="anoAtual"></span> GLTIdesk</span>
    </footer>

  </div>

</div>

<script src="dashboard.js">
    /* =========================================================
   GLTIdesk — Admin Dashboard
   ========================================================= */
(function () {
  'use strict';

  /* ---------- Lucide ---------- */
  const initIcons = () => {
    if (window.lucide && typeof window.lucide.createIcons === 'function') {
      window.lucide.createIcons();
    }
  };

  /* ---------- APP / SIDEBAR ---------- */
  const app = document.getElementById('app');
  const sidebarCollapse = document.getElementById('sidebarCollapse');
  const menuToggle = document.getElementById('menuToggle');
  const sidebarOverlay = document.getElementById('sidebarOverlay');

  // Colapsar sidebar (desktop)
  if (sidebarCollapse) {
    sidebarCollapse.addEventListener('click', () => {
      app.classList.toggle('sidebar-collapsed');
      // Recalcula gráficos após transição
      setTimeout(resizeCharts, 350);
    });
  }

  // Drawer mobile
  const openMobileSidebar = () => {
    app.classList.add('sidebar-mobile-open');
    sidebarOverlay.classList.add('show');
    document.body.style.overflow = 'hidden';
  };
  const closeMobileSidebar = () => {
    app.classList.remove('sidebar-mobile-open');
    sidebarOverlay.classList.remove('show');
    document.body.style.overflow = '';
  };

  if (menuToggle) menuToggle.addEventListener('click', openMobileSidebar);
  if (sidebarOverlay) sidebarOverlay.addEventListener('click', closeMobileSidebar);

  // Fecha drawer ao clicar em um link
  document.querySelectorAll('.nav-item').forEach((item) => {
    item.addEventListener('click', (e) => {
      // apenas para links com href real
      if (item.getAttribute('href') === '#') e.preventDefault();

      // menu ativo
      document.querySelectorAll('.nav-item.active').forEach((a) => a.classList.remove('active'));
      item.classList.add('active');

      if (window.innerWidth <= 768) closeMobileSidebar();
    });
  });

  // Auto colapsa em tablet
  const handleResponsive = () => {
    if (window.innerWidth <= 1024 && window.innerWidth > 768) {
      app.classList.add('sidebar-collapsed');
    }
    if (window.innerWidth > 1024) {
      app.classList.remove('sidebar-collapsed');
    }
    if (window.innerWidth > 768) {
      closeMobileSidebar();
    }
    setTimeout(resizeCharts, 200);
  };

  window.addEventListener('resize', handleResponsive);

  /* ---------- USER DROPDOWN ---------- */
  const userMenuBtn = document.getElementById('userMenuBtn');
  const userDropdown = document.getElementById('userDropdown');

  if (userMenuBtn) {
    userMenuBtn.addEventListener('click', (e) => {
      if (e.target.closest('.user-dropdown')) return;
      userMenuBtn.classList.toggle('open');
    });
    userMenuBtn.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        userMenuBtn.classList.toggle('open');
      }
    });
  }

  /* ---------- NOTIFICATIONS DROPDOWN ---------- */
  const notifBtn = document.getElementById('notifBtn');
  const notifPanel = notifBtn ? notifBtn.parentElement : null;

  if (notifBtn && notifPanel) {
    notifBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      notifPanel.classList.toggle('open');
    });
  }

  // Fecha dropdowns ao clicar fora
  document.addEventListener('click', (e) => {
    if (userMenuBtn && !userMenuBtn.contains(e.target)) {
      userMenuBtn.classList.remove('open');
    }
    if (notifPanel && !notifPanel.contains(e.target)) {
      notifPanel.classList.remove('open');
    }
  });

  /* ---------- CHIP RANGE (charts) ---------- */
  document.querySelectorAll('.chip-group').forEach((group) => {
    group.addEventListener('click', (e) => {
      const chip = e.target.closest('.chip');
      if (!chip) return;
      group.querySelectorAll('.chip').forEach((c) => c.classList.remove('active'));
      chip.classList.add('active');

      const range = chip.dataset.range;
      if (range === '30' && window.charts && window.charts.chamados) {
        // Série fictícia de 30 dias
        const abertos = [12,18,15,22,19,17,21,24,20,18,16,19,22,25,21,18,20,23,19,17,22,24,21,19,18,20,23,26,22,19];
        const resolvidos = [10,16,14,20,17,15,19,22,18,16,14,17,20,23,19,16,18,21,17,15,20,22,19,17,16,18,21,24,20,17];
        window.charts.chamados.data.labels = Array.from({length: 30}, (_, i) => `${i + 1}`);
        window.charts.chamados.data.datasets[0].data = abertos;
        window.charts.chamados.data.datasets[1].data = resolvidos;
        window.charts.chamados.update();
      } else if (range === '7' && window.charts && window.charts.chamados) {
        window.charts.chamados.data.labels = ['Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'];
        window.charts.chamados.data.datasets[0].data = [18, 24, 19, 31, 27, 8, 6];
        window.charts.chamados.data.datasets[1].data = [15, 20, 17, 26, 24, 6, 4];
        window.charts.chamados.update();
      }
    });
  });

  /* ---------- CHART.JS ---------- */
  window.charts = {};

  const chartDefaults = {
    font: { family: "'Segoe UI', system-ui, -apple-system, sans-serif" },
    color: '#64748b'
  };

  if (window.Chart) {
    Chart.defaults.font.family = chartDefaults.font.family;
    Chart.defaults.color = chartDefaults.color;
    Chart.defaults.font.size = 11;

    // ---- Chamados (line) ----
    const ctxChamados = document.getElementById('chartChamados');
    if (ctxChamados) {
      const ctx = ctxChamados.getContext('2d');

      const gradAbertos = ctx.createLinearGradient(0, 0, 0, 260);
      gradAbertos.addColorStop(0, 'rgba(37,99,235,.28)');
      gradAbertos.addColorStop(1, 'rgba(37,99,235,0)');

      const gradResolvidos = ctx.createLinearGradient(0, 0, 0, 260);
      gradResolvidos.addColorStop(0, 'rgba(34,197,94,.24)');
      gradResolvidos.addColorStop(1, 'rgba(34,197,94,0)');

      window.charts.chamados = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
          datasets: [
            {
              label: 'Abertos',
              data: [18, 24, 19, 31, 27, 8, 6],
              borderColor: '#2563eb',
              backgroundColor: gradAbertos,
              borderWidth: 2.5,
              fill: true,
              tension: 0.4,
              pointRadius: 3,
              pointHoverRadius: 6,
              pointBackgroundColor: '#2563eb',
              pointBorderColor: '#fff',
              pointBorderWidth: 2
            },
            {
              label: 'Resolvidos',
              data: [15, 20, 17, 26, 24, 6, 4],
              borderColor: '#22c55e',
              backgroundColor: gradResolvidos,
              borderWidth: 2.5,
              fill: true,
              tension: 0.4,
              pointRadius: 3,
              pointHoverRadius: 6,
              pointBackgroundColor: '#22c55e',
              pointBorderColor: '#fff',
              pointBorderWidth: 2
            }
          ]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          interaction: { intersect: false, mode: 'index' },
          plugins: {
            legend: {
              position: 'top',
              align: 'end',
              labels: {
                boxWidth: 10,
                boxHeight: 10,
                usePointStyle: true,
                pointStyle: 'circle',
                padding: 14,
                font: { size: 12, weight: '600' }
              }
            },
            tooltip: {
              backgroundColor: '#0f172a',
              padding: 10,
              cornerRadius: 8,
              titleFont: { size: 12, weight: '700' },
              bodyFont: { size: 12 },
              displayColors: true,
              boxPadding: 4
            }
          },
          scales: {
            x: {
              grid: { display: false },
              border: { display: false },
              ticks: { font: { size: 11, weight: '600' }, color: '#94a3b8' }
            },
            y: {
              beginAtZero: true,
              grid: { color: '#eef2f7', drawBorder: false },
              border: { display: false },
              ticks: { font: { size: 11 }, color: '#94a3b8', padding: 6 }
            }
          }
        }
      });
    }

    // ---- Status (doughnut) ----
    const ctxStatus = document.getElementById('chartStatus');
    if (ctxStatus) {
      window.charts.status = new Chart(ctxStatus, {
        type: 'doughnut',
        data: {
          labels: ['Abertos', 'Em atendimento', 'Aguardando', 'Resolvidos'],
          datasets: [{
            data: [24, 8, 6, 42],
            backgroundColor: ['#2563eb', '#0891b2', '#f59e0b', '#22c55e'],
            borderWidth: 0,
            hoverOffset: 6,
            spacing: 2
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          cutout: '72%',
          plugins: {
            legend: { display: false },
            tooltip: {
              backgroundColor: '#0f172a',
              padding: 10,
              cornerRadius: 8,
              titleFont: { size: 12, weight: '700' },
              bodyFont: { size: 12 }
            }
          }
        }
      });
    }

    // ---- Health ring ----
    const ctxHealth = document.getElementById('chartHealth');
    if (ctxHealth) {
      window.charts.health = new Chart(ctxHealth, {
        type: 'doughnut',
        data: {
          labels: ['Saudável', 'Atenção'],
          datasets: [{
            data: [92, 8],
            backgroundColor: ['#22c55e', '#f1f5f9'],
            borderWidth: 0,
            cutout: '78%',
            circumference: 360,
            rotation: 0
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: { display: false },
            tooltip: {
              backgroundColor: '#0f172a',
              padding: 10,
              cornerRadius: 8,
              callbacks: {
                label: (ctx) => `${ctx.parsed}%`
              }
            }
          }
        }
      });
    }
  }

  const resizeCharts = () => {
    Object.values(window.charts).forEach((c) => {
      if (c && typeof c.resize === 'function') c.resize();
    });
  };

  /* ---------- TASKS CHECK ---------- */
  document.querySelectorAll('.task-check input').forEach((input) => {
    input.addEventListener('change', () => {
      const p = input.closest('li').querySelector('p');
      if (p) p.classList.toggle('done', input.checked);
    });
  });

  /* ---------- ANO FOOTER ---------- */
  const anoEl = document.getElementById('anoAtual');
  if (anoEl) anoEl.textContent = new Date().getFullYear();

  /* ---------- BOOT ---------- */
  const boot = () => {
    initIcons();
    handleResponsive();
  };

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }
  window.addEventListener('load', initIcons);
})();
</script>
</body>
</html>