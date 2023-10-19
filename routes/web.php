<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\MasterBrandController;
use App\Http\Controllers\MasterBrandExportImportController;
use App\Http\Controllers\MasterKategoriController;
use App\Http\Controllers\MasterKategoriExportImportController;
use App\Http\Controllers\MasterSatuanController;
use App\Http\Controllers\MasterSatuanExportImportController;
use App\Http\Controllers\MasterSupplierController;
use App\Http\Controllers\MasterSupplierExportImportController;

// Authentication
Route::get("login", [AuthController::class, "login"])->name("login");
Route::get("register", [AuthController::class, "register"])->name("register");
Route::get("changePassword", [AuthController::class, "changePassword"])->name("changePassword");
Route::post("login", [AuthController::class, "loginProcess"])->name("login.process");
Route::post("register", [AuthController::class, "registerProcess"])->name("register.process");
Route::post("changePassword", [AuthController::class, "changePasswordProcess"])->name("changePassword.process");
Route::get("logout", [AuthController::class, "logout"])->name("logout");

// Get
Route::get("/", DashboardController::class)->name("dashboard")->middleware(["auth"]);
Route::get("activity_log", ActivityLogController::class)->name("activity_log")->middleware(["auth"]);

// CRUD
Route::resource("role", RoleController::class)->middleware(["auth", "is_admin"]);
Route::resource("user", UserController::class)->middleware(["auth", "is_admin"]);
Route::resource("master_brand", MasterBrandController::class)->middleware(["auth", "is_admin"]);
Route::resource("master_kategori", MasterKategoriController::class)->middleware(["auth", "is_admin"]);
Route::resource("master_satuan", MasterSatuanController::class)->middleware(["auth", "is_admin"]);
Route::resource("master_supplier", MasterSupplierController::class)->middleware(["auth", "is_admin"]);

// Import View
Route::get("master_brand-import", [MasterBrandExportImportController::class, "importView"])->name("master_brand-import-view")->middleware(["auth", "is_admin"]);
Route::get("master_kategori-import", [MasterKategoriExportImportController::class, "importView"])->name("master_kategori-import-view")->middleware(["auth", "is_admin"]);
Route::get("master_satuan-import", [MasterSatuanExportImportController::class, "importView"])->name("master_satuan-import-view")->middleware(["auth", "is_admin"]);
Route::get("master_supplier-import", [MasterSupplierExportImportController::class, "importView"])->name("master_supplier-import-view")->middleware(["auth", "is_admin"]);

// Import
Route::post("master_brand-import", [MasterBrandExportImportController::class, "import"])->name("master_brand-import")->middleware(["auth", "is_admin"]);
Route::post("master_kategori-import", [MasterKategoriExportImportController::class, "import"])->name("master_kategori-import")->middleware(["auth", "is_admin"]);
Route::post("master_satuan-import", [MasterSatuanExportImportController::class, "import"])->name("master_satuan-import")->middleware(["auth", "is_admin"]);
Route::post("master_supplier-import", [MasterSupplierExportImportController::class, "import"])->name("master_supplier-import")->middleware(["auth", "is_admin"]);

// Export
Route::get("master_brand-export", [MasterBrandExportImportController::class, "export"])->name("master_brand-export")->middleware(["auth", "is_admin"]);
Route::get("master_kategori-export", [MasterKategoriExportImportController::class, "export"])->name("master_kategori-export")->middleware(["auth", "is_admin"]);
Route::get("master_satuan-export", [MasterSatuanExportImportController::class, "export"])->name("master_satuan-export")->middleware(["auth", "is_admin"]);
Route::get("master_supplier-export", [MasterSupplierExportImportController::class, "export"])->name("master_supplier-export")->middleware(["auth", "is_admin"]);

// Clear
Route::get("master_brand-clear", [MasterBrandExportImportController::class, "clear"])->name("master_brand-clear")->middleware(["auth", "is_admin"]);
Route::get("master_kategori-clear", [MasterKategoriExportImportController::class, "clear"])->name("master_kategori-clear")->middleware(["auth", "is_admin"]);
Route::get("master_satuan-clear", [MasterSatuanExportImportController::class, "clear"])->name("master_satuan-clear")->middleware(["auth", "is_admin"]);
Route::get("master_supplier-clear", [MasterSupplierExportImportController::class, "clear"])->name("master_supplier-clear")->middleware(["auth", "is_admin"]);
