<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;

// Admin routes
Route::group(["prefix" => "admin", "as" => "admin."], function () {
  // Dashboard
  Route::get("/", [DashboardController::class, "index"])->name("index");

  // Category
  /**
   * Url admin/categories/*
   */
  Route::group(["prefix" => "categories", "as" => "categories."], function () {
    // Get
    Route::get("/", [CategoryController::class, "index"])->name("index");
    Route::get("/create", [CategoryController::class, "create"])->name(
      "create"
    );
    Route::get("/edit/{category:slug}", [
      CategoryController::class,
      "edit",
    ])->name("edit");

    // Put
    Route::put("/{category:slug}", [CategoryController::class, "update"])->name(
      "update"
    );

    // Delete
    Route::delete("/{category:slug}", [
      CategoryController::class,
      "delete",
    ])->name("delete");

    // Post
    Route::post("/", [CategoryController::class, "store"])->name("store");
  });
});
