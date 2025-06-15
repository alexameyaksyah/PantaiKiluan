<?php
// acara.php
require_once 'includes/db_23312051.php';
require_once 'includes/functions_23312051.php';

$pageTitle = "Acara & Event";
include 'includes/header_23312051.php';

// CRUD Operations
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'create':
                $stmt = $pdo->prepare("INSERT INTO acara (nama, tanggal, deskripsi) VALUES (?, ?, ?)");
                $stmt->execute([$_POST['nama'], $_POST['tanggal'], $_POST['deskripsi']]);
                showAlert('Acara berhasil ditambahkan!', 'success');
                break;
                
            case 'update':
                $stmt = $pdo->prepare("UPDATE acara SET nama = ?, tanggal = ?, deskripsi = ? WHERE id = ?");
                $stmt->execute([$_POST['nama'], $_POST['tanggal'], $_POST['deskripsi'], $_POST['id']]);
                showAlert('Acara berhasil diperbarui!', 'success');
                break;
                
            case 'delete':
                $stmt = $pdo->prepare("DELETE FROM acara WHERE id = ?");
                $stmt->execute([$_POST['id']]);
                showAlert('Acara berhasil dihapus!', 'info');
                break;
        }
    }
}

// Get all events
$stmt = $pdo->query("SELECT * FROM tbacara_23312051 ORDER BY tanggal DESC");
$events = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Acara -->
<section id="acara" class="py-5 events-section">
    <div class="container">
        <div class="section-title">
            <h2>Acara & Event</h2>
        </div>
        
        <!-- Search Form -->
        <div class="search-form">
            <h4><i class="fas fa-search"></i> Cari Acara</h4>
            <div class="row">
                <div class="col-md-8">
                    <input type="text" id="searchInput" class="form-control" placeholder="Masukkan nama acara...">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary w-100" onclick="searchEvents()">
                        <i class="fas fa-search"></i> Cari
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Event Management Buttons -->
        <div class="text-center mb-4">
            <button class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#eventModal" onclick="resetForm()">
                <i class="fas fa-plus"></i> Tambah Acara
            </button>
            <a href="acara.php" class="btn btn-info">
                <i class="fas fa-refresh"></i> Refresh
            </a>
        </div>
        
        <!-- Events List -->
        <div id="eventsList" class="row">
            <?php if (empty($events)): ?>
                <div class="col-12">
                    <div class="alert alert-info">Tidak ada acara yang tersedia.</div>
                </div>
            <?php else: ?>
                <?php foreach ($events as $event): ?>
                    <div class="col-md-6 mb-3">
                        <div class="event-card">
                            <h5><?php echo htmlspecialchars($event['nama']); ?></h5>
                            <p><i class="fas fa-calendar"></i> <?php echo htmlspecialchars($event['tanggal']); ?></p>
                            <p><?php echo htmlspecialchars($event['deskripsi']); ?></p>
                            <div class="mt-3">
                                <button class="btn btn-warning btn-sm me-2" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#eventModal"
                                        onclick="editEvent(
                                            <?php echo $event['id']; ?>,
                                            '<?php echo addslashes($event['nama']); ?>',
                                            '<?php echo addslashes($event['tanggal']); ?>',
                                            '<?php echo addslashes($event['deskripsi']); ?>'
                                        )">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                                <form method="POST" style="display: inline;">
                                    <input type="hidden" name="action" value="delete">
                                    <input type="hidden" name="id" value="<?php echo $event['id']; ?>">
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus acara ini?')">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Event Form Modal -->
<div class="modal fade" id="eventModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventModalTitle">Tambah Acara Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST">
                <div class="modal-body">
                    <input type="hidden" name="action" id="formAction" value="create">
                    <input type="hidden" name="id" id="eventId">
                    <div class="mb-3">
                        <label for="eventName" class="form-label">Nama Acara</label>
                        <input type="text" class="form-control" id="eventName" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventDate" class="form-label">Jadwal Acara</label>
                        <input type="text" class="form-control" id="eventDate" name="tanggal" placeholder="Contoh: 15 Juli 2025" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventDescription" class="form-label">Deskripsi Acara</label>
                        <textarea class="form-control" id="eventDescription" name="deskripsi" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function resetForm() {
    document.getElementById('eventModalTitle').textContent = 'Tambah Acara Baru';
    document.getElementById('formAction').value = 'create';
    document.getElementById('eventId').value = '';
    document.getElementById('eventName').value = '';
    document.getElementById('eventDate').value = '';
    document.getElementById('eventDescription').value = '';
}

function editEvent(id, name, date, description) {
    document.getElementById('eventModalTitle').textContent = 'Edit Acara';
    document.getElementById('formAction').value = 'update';
    document.getElementById('eventId').value = id;
    document.getElementById('eventName').value = name;
    document.getElementById('eventDate').value = date;
    document.getElementById('eventDescription').value = description;
}

function searchEvents() {
    const searchTerm = document.getElementById('searchInput').value.toLowerCase();
    const eventCards = document.querySelectorAll('.event-card');
    
    eventCards.forEach(card => {
        const title = card.querySelector('h5').textContent.toLowerCase();
        const description = card.querySelector('p:last-child').textContent.toLowerCase();
        
        if (title.includes(searchTerm) || description.includes(searchTerm)) {
            card.closest('.col-md-6').style.display = 'block';
        } else {
            card.closest('.col-md-6').style.display = 'none';
        }
    });
}

// Search input enter key handler
document.getElementById('searchInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        searchEvents();
    }
});
</script>

<?php
include 'includes/footer_23312051.php';
?>