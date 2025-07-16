 <!-- Content wrapper -->


 <div class="content-wrapper" style="overflow-y: auto; height: calc(100vh - 7.5rem);">
     <!-- Content -->
     <div class="container-xxl flex-grow-1 container-p-y ">
         <div class="row">
             <div class="col-lg-8 mb-4 order-0">
                 <div class="card">
                     <div class="d-flex align-items-end row">
                         <div class="col-sm-7">
                             <div class="card-body">
                                 <h5 class="card-title text-primary">
                                     Congratulations John! 🎉
                                 </h5>
                                 <p class="mb-4">
                                     You have done <span class="fw-bold">72%</span> more
                                     sales today. Check your new badge in your profile.
                                 </p>

                                 <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                             </div>
                         </div>
                         <div class="col-sm-5 text-center text-sm-left">
                             <div class="card-body pb-0 px-0 px-md-4">
                                 <img src="assets/img/illustrations/man-with-laptop-light.png" height="140"
                                     alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                     data-app-light-img="illustrations/man-with-laptop-light.png" />
                             </div>
                         </div>
                     </div>
                 </div>
             </div>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
        }

        .dashboard-header {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 0 0 20px 20px;
            margin-bottom: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            color: white;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo i {
            background: linear-gradient(45deg, #4CAF50, #45a049);
            padding: 10px;
            border-radius: 50%;
            color: white;
        }

        .header-stats {
            display: flex;
            gap: 30px;
            color: white;
        }

        .header-stat {
            text-align: center;
        }

        .header-stat .value {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .header-stat .label {
            font-size: 12px;
            opacity: 0.8;
            text-transform: uppercase;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .card-header {
            display: flex;
            justify-content: between;
            align-items: center;
            margin-bottom: 20px;
        }

        .card-title {
            font-size: 18px;
            font-weight: 600;
            color: #2c3e50;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .card-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 16px;
        }

        .icon-blue { background: linear-gradient(45deg, #3498db, #2980b9); }
        .icon-green { background: linear-gradient(45deg, #27ae60, #229954); }
        .icon-orange { background: linear-gradient(45deg, #f39c12, #e67e22); }
        .icon-red { background: linear-gradient(45deg, #e74c3c, #c0392b); }
        .icon-purple { background: linear-gradient(45deg, #9b59b6, #8e44ad); }
        .icon-teal { background: linear-gradient(45deg, #1abc9c, #16a085); }

        .metric-value {
            font-size: 32px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 8px;
        }

        .metric-label {
            font-size: 14px;
            color: #7f8c8d;
            margin-bottom: 12px;
        }

        .metric-change {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 14px;
            font-weight: 500;
        }

        .change-positive {
            color: #27ae60;
        }

        .change-negative {
            color: #e74c3c;
        }

        .kpi-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 15px;
            margin-bottom: 30px;
        }

        .kpi-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }

        .kpi-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .kpi-card.primary { border-left-color: #3498db; }
        .kpi-card.success { border-left-color: #27ae60; }
        .kpi-card.warning { border-left-color: #f39c12; }
        .kpi-card.danger { border-left-color: #e74c3c; }
        .kpi-card.info { border-left-color: #17a2b8; }

        .kpi-value {
            font-size: 24px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .kpi-label {
            font-size: 12px;
            color: #7f8c8d;
            text-transform: uppercase;
            font-weight: 500;
        }

        .section-title {
            font-size: 24px;
            font-weight: bold;
            color: white;
            margin: 40px 0 20px 0;
            text-align: center;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(45deg, #4CAF50, #45a049);
            border-radius: 2px;
        }

        .chart-container {
            height: 200px;
            background: linear-gradient(45deg, #f8f9fa, #e9ecef);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
            font-style: italic;
            margin-top: 15px;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: #ecf0f1;
            border-radius: 4px;
            overflow: hidden;
            margin-top: 10px;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(45deg, #3498db, #2980b9);
            border-radius: 4px;
            transition: width 0.8s ease;
        }

        .transactions-list {
            max-height: 300px;
            overflow-y: auto;
        }

        .transaction-item {
            display: flex;
            justify-content: between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #ecf0f1;
        }

        .transaction-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .transaction-icon {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 14px;
        }

        .transaction-details h6 {
            margin: 0 0 3px 0;
            font-size: 14px;
            color: #2c3e50;
        }

        .transaction-details small {
            color: #7f8c8d;
            font-size: 12px;
        }

        .transaction-amount {
            font-weight: bold;
            color: #2c3e50;
        }

        .top-performers {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .performer-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .performer-item:hover {
            background: #e9ecef;
            transform: translateX(5px);
        }

        .performer-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: linear-gradient(45deg, #3498db, #2980b9);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        .performer-details {
            flex: 1;
        }

        .performer-name {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 3px;
        }

        .performer-stats {
            font-size: 12px;
            color: #7f8c8d;
        }

        .performer-rating {
            display: flex;
            align-items: center;
            gap: 5px;
            color: #f39c12;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card {
            animation: slideIn 0.6s ease forwards;
        }

        .card:nth-child(1) { animation-delay: 0.1s; }
        .card:nth-child(2) { animation-delay: 0.2s; }
        .card:nth-child(3) { animation-delay: 0.3s; }
        .card:nth-child(4) { animation-delay: 0.4s; }

        @media (max-width: 768px) {
            .header-stats {
                display: none;
            }
            
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
            
            .kpi-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-header">
        <div class="header-content">
            <div class="logo">
                <i class="fas fa-spray-can"></i>
                CleanSpace Dashboard
            </div>
            <div class="header-stats">
                <div class="header-stat">
                    <div class="value">1,847</div>
                    <div class="label">Réservations ce mois</div>
                </div>
                <div class="header-stat">
                    <div class="value">€127,589</div>
                    <div class="label">Revenus ce mois</div>
                </div>
                <div class="header-stat">
                    <div class="value">94.2%</div>
                    <div class="label">Satisfaction client</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- KPI Principaux -->
        <div class="section-title">📊 KPI Principaux - Vue d'ensemble</div>
        <div class="dashboard-grid">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="card-icon icon-blue">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        Réservations Totales
                    </div>
                </div>
                <div class="metric-value">1,847</div>
                <div class="metric-label">Réservations ce mois</div>
                <div class="metric-change change-positive">
                    <i class="fas fa-arrow-up"></i>
                    +18.2% vs mois dernier
                </div>
                <div class="chart-container">
                    Graphique des réservations (7 derniers jours)
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="card-icon icon-green">
                            <i class="fas fa-euro-sign"></i>
                        </div>
                        Revenus Générés
                    </div>
                </div>
                <div class="metric-value">127 000 FCFA</div>
                <div class="metric-label">Chiffre d'affaires brut</div>
                <div class="metric-change change-positive">
                    <i class="fas fa-arrow-up"></i>
                    +24.7% vs mois dernier
                </div>
                <div style="margin-top: 10px; font-size: 14px; color: #7f8c8d;">
                    <strong>CA Net:</strong> 102,071 FCFA (Marge: 80%)
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="card-icon icon-orange">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        Taux de Conversion
                    </div>
                </div>
                <div class="metric-value">8.4%</div>
                <div class="metric-label">Visites → Réservations</div>
                <div class="metric-change change-positive">
                    <i class="fas fa-arrow-up"></i>
                    +1.2% vs mois dernier
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 84%"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="card-icon icon-purple">
                            <i class="fas fa-users"></i>
                        </div>
                        Satisfaction Client
                    </div>
                </div>
                <div class="metric-value">4.7/5</div>
                <div class="metric-label">Note moyenne (847 avis)</div>
                <div class="metric-change change-positive">
                    <i class="fas fa-arrow-up"></i>
                    +0.3 vs mois dernier
                </div>
                <div style="margin-top: 10px;">
                    <div style="display: flex; gap: 2px;">
                        <i class="fas fa-star" style="color: #f39c12;"></i>
                        <i class="fas fa-star" style="color: #f39c12;"></i>
                        <i class="fas fa-star" style="color: #f39c12;"></i>
                        <i class="fas fa-star" style="color: #f39c12;"></i>
                        <i class="fas fa-star-half-alt" style="color: #f39c12;"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- KPI Opérationnels -->
        <div class="section-title">⚡ KPI Opérationnels - Suivi quotidien</div>
        <div class="kpi-grid">
            <div class="kpi-card primary">
                <div class="kpi-value">47</div>
                <div class="kpi-label">Réservations aujourd'hui</div>
            </div>
            <div class="kpi-card warning">
                <div class="kpi-value">12</div>
                <div class="kpi-label">En attente confirmation</div>
            </div>
            <div class="kpi-card success">
                <div class="kpi-value">34</div>
                <div class="kpi-label">Prestataires actifs</div>
            </div>
            <div class="kpi-card info">
                <div class="kpi-value">28</div>
                <div class="kpi-label">Interventions terminées</div>
            </div>
            <div class="kpi-card primary">
                <div class="kpi-value">2h15</div>
                <div class="kpi-label">Temps moyen intervention</div>
            </div>
            <div class="kpi-card success">
                <div class="kpi-value">15min</div>
                <div class="kpi-label">Temps avant confirmation</div>
            </div>
        </div>

        <div class="dashboard-grid">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="card-icon icon-teal">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        Zones les plus demandées
                    </div>
                </div>
                <div class="top-performers">
                    <div class="performer-item">
                        <div class="performer-avatar">1</div>
                        <div class="performer-details">
                            <div class="performer-name">Abidjan 15ème</div>
                            <div class="performer-stats">247 réservations ce mois</div>
                        </div>
                    </div>
                    <div class="performer-item">
                        <div class="performer-avatar">2</div>
                        <div class="performer-details">
                            <div class="performer-name">Abidjan 3ème</div>
                            <div class="performer-stats">186 réservations ce mois</div>
                        </div>
                    </div>
                    <div class="performer-item">
                        <div class="performer-avatar">3</div>
                        <div class="performer-details">
                            <div class="performer-name">Abidjan 8ème</div>
                            <div class="performer-stats">142 réservations ce mois</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="card-icon icon-green">
                            <i class="fas fa-star"></i>
                        </div>
                        Top Prestataires
                    </div>
                </div>
                <div class="top-performers">
                    <div class="performer-item">
                        <div class="performer-avatar">MJ</div>
                        <div class="performer-details">
                            <div class="performer-name">Marie Dupont</div>
                            <div class="performer-stats">89 interventions - 4.9/5</div>
                        </div>
                        <div class="performer-rating">
                            <i class="fas fa-star"></i>
                            4.9
                        </div>
                    </div>
                    <div class="performer-item">
                        <div class="performer-avatar">PL</div>
                        <div class="performer-details">
                            <div class="performer-name">Paul Martin</div>
                            <div class="performer-stats">76 interventions - 4.8/5</div>
                        </div>
                        <div class="performer-rating">
                            <i class="fas fa-star"></i>
                            4.8
                        </div>
                    </div>
                    <div class="performer-item">
                        <div class="performer-avatar">SB</div>
                        <div class="performer-details">
                            <div class="performer-name">Sophie Bernard</div>
                            <div class="performer-stats">71 interventions - 4.8/5</div>
                        </div>
                        <div class="performer-rating">
                            <i class="fas fa-star"></i>
                            4.8
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- KPI Financiers -->
        <div class="section-title">💰 KPI Financiers</div>
        <div class="kpi-grid">
            <div class="kpi-card success">
                <div class="kpi-value">69 FCFA</div>
                <div class="kpi-label">Revenu moyen/réservation</div>
            </div>
            <div class="kpi-card primary">
                <div class="kpi-value">20%</div>
                <div class="kpi-label">Taux commission moyen</div>
            </div>
            <div class="kpi-card warning">
                <div class="kpi-value">24 FCFA</div>
                <div class="kpi-label">Coût acquisition client</div>
            </div>
            <div class="kpi-card info">
                <div class="kpi-value">847 FCFA</div>
                <div class="kpi-label">Valeur vie client (LTV)</div>
            </div>
            <div class="kpi-card success">
                <div class="kpi-value">72%</div>
                <div class="kpi-label">Marge nette moyenne</div>
            </div>
            <div class="kpi-card primary">
                <div class="kpi-value">4.2x</div>
                <div class="kpi-label">Ratio LTV/CAC</div>
            </div>
        </div>

        <!-- KPI Marketing -->
        <div class="section-title">📈 KPI Marketing</div>
        <div class="dashboard-grid">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="card-icon icon-blue">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        Performance Application
                    </div>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div>
                        <div class="metric-value" style="font-size: 24px;">12 847</div>
                        <div class="metric-label">Téléchargements</div>
                        <div class="metric-change change-positive">
                            <i class="fas fa-arrow-up"></i>
                            +15.2%
                        </div>
                    </div>
                    <div>
                        <div class="metric-value" style="font-size: 24px;">68.4%</div>
                        <div class="metric-label">Taux d'activation</div>
                        <div class="metric-change change-positive">
                            <i class="fas fa-arrow-up"></i>
                            +2.1%
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="card-icon icon-orange">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        Conversion & Rétention
                    </div>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div>
                        <div class="metric-value" style="font-size: 24px;">12.7%</div>
                        <div class="metric-label">Taux abandon panier</div>
                        <div class="metric-change change-negative">
                            <i class="fas fa-arrow-down"></i>
                            -3.2%
                        </div>
                    </div>
                    <div>
                        <div class="metric-value" style="font-size: 24px;">847</div>
                        <div class="metric-label">Parrainages</div>
                        <div class="metric-change change-positive">
                            <i class="fas fa-arrow-up"></i>
                            +28.4%
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Clients & Rétention -->
        <div class="section-title">👥 Clients & Rétention</div>
        <div class="kpi-grid">
            <div class="kpi-card primary">
                <div class="kpi-value">12 47</div>
                <div class="kpi-label">Clients actifs ce mois</div>
            </div>
            <div class="kpi-card success">
                <div class="kpi-value">342</div>
                <div class="kpi-label">Nouveaux clients</div>
            </div>
            <div class="kpi-card info">
                <div class="kpi-value">905</div>
                <div class="kpi-label">Clients récurrents</div>
            </div>
            <div class="kpi-card warning">
                <div class="kpi-value">74.2%</div>
                <div class="kpi-label">Taux rétention 30j</div>
            </div>
            <div class="kpi-card primary">
                <div class="kpi-value">4.7%</div>
                <div class="kpi-label">Taux annulation clients</div>
            </div>
            <div class="kpi-card danger">
                <div class="kpi-value">2.1%</div>
                <div class="kpi-label">Taux annulation prestataires</div>
            </div>
        </div>

        <!-- Transactions récentes -->
        <div class="dashboard-grid">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="card-icon icon-green">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        Transactions Récentes
                    </div>
                </div>
                <div class="transactions-list">
                    <div class="transaction-item">
                        <div class="transaction-info">
                            <div class="transaction-icon icon-green">
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="transaction-details">
                                <h6>Ménage complet - Marie D.</h6>
                                <small>Il y a 12 minutes</small>
                            </div>
                        </div>
                        <div class="transaction-amount">+89 FCFA</div>
                    </div>
                    <div class="transaction-item">
                        <div class="transaction-info">
                            <div class="transaction-icon icon-blue">
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="transaction-details">
                                <h6>Nettoyage vitres - Paul M.</h6>
                                <small>Il y a 28 minutes</small>
                            </div>
                        </div>
                        <div class="transaction-amount">+45 FCFA</div>
                    </div>
                    <div class="transaction-item">
                        <div class="transaction-info">
                            <div class="transaction-icon icon-orange">
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="transaction-details">
                                <h6>Repassage - Sophie B.</h6>
                                <small>Il y a 1 heure</small>
                            </div>
                        </div>
                        <div class="transaction-amount">+32 FCFA</div>
                    </div>
                    <div class="transaction-item">
                        <div class="transaction-info">
                            <div class="transaction-icon icon-purple">
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="transaction-details">
                                <h6>Ménage bureaux - Clean Pro</h6>
                                <small>Il y a 2 heures</small>
                            </div>
                        </div>
                        <div class="transaction-amount">+156 FCFA</div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="card-icon icon-red">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        Alertes & Notifications
                    </div>
                </div>
                <div class="top-performers">
                    <div class="performer-item" style="background: #fff3cd; border-left: 4px solid #f39c12;">
                        <div class="performer-avatar" style="background: #f39c12;">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="performer-details">
                            <div class="performer-name">12 réservations en attente</div>
                            <div class="performer-stats">Confirmation requise depuis >2h</div>
                        </div>
             <!--/ Transactions -->
         </div>
     </div>
     <!-- / Content -->