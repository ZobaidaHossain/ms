<?php

namespace Database\Seeders;

use App\Models\Auth\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** Dashboard Management */
        Permission::insert(['module_id' => '1', 'name' => 'View Dashboard', 'slug' => 'dashboard.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '1', 'name' => 'Show Dashboard', 'slug' => 'dashboard.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '1', 'name' => 'Add Dashboard', 'slug' => 'dashboard.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '1', 'name' => 'Edit Dashboard', 'slug' => 'dashboard.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '1', 'name' => 'Delete Dashboard', 'slug' => 'dashboard.destroy', 'status' => 1, 'created_at' => now()]);

        /**Super User Management */
        Permission::insert(['module_id' => '2', 'name' => 'View S-User', 'slug' => 'super-user.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '2', 'name' => 'Show S-User', 'slug' => 'super-user.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '2', 'name' => 'Add S-User', 'slug' => 'super-user.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '2', 'name' => 'Edit S-User', 'slug' => 'super-user.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '2', 'name' => 'delete S-User', 'slug' => 'super-user.destroy', 'status' => 1, 'created_at' => now()]);

        /** User Management */
        Permission::insert(['module_id' => '3', 'name' => 'View User', 'slug' => 'user.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '3', 'name' => 'Show User', 'slug' => 'user.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '3', 'name' => 'Add User', 'slug' => 'user.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '3', 'name' => 'Edit User', 'slug' => 'user.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '3', 'name' => 'delete User', 'slug' => 'user.destroy', 'status' => 1, 'created_at' => now()]);

        /** Roles Management */
        Permission::insert(['module_id' => '4', 'name' => 'View Roles', 'slug' => 'role.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '4', 'name' => 'Show Role', 'slug' => 'role.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '4', 'name' => 'Add Role', 'slug' => 'role.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '4', 'name' => 'Edit Role', 'slug' => 'role.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '4', 'name' => 'delete Role', 'slug' => 'role.destroy', 'status' => 1, 'created_at' => now()]);


        /** Slider Management */
        Permission::insert(['module_id' => '5', 'name' => 'View Slider', 'slug' => 'slider.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '5', 'name' => 'Show Slider', 'slug' => 'slider.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '5', 'name' => 'Add Slider', 'slug' => 'slider.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '5', 'name' => 'Edit Slider', 'slug' => 'slider.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '5', 'name' => 'delete Slider', 'slug' => 'slider.destroy', 'status' => 1, 'created_at' => now()]);

        /** About-us Management */
        Permission::insert(['module_id' => '6', 'name' => 'View about-us', 'slug' => 'about-us.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '6', 'name' => 'Show about-us', 'slug' => 'about-us.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '6', 'name' => 'Add about-us', 'slug' => 'about-us.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '6', 'name' => 'Edit about-us', 'slug' => 'about-us.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '6', 'name' => 'delete about-us', 'slug' => 'about-us.destroy', 'status' => 1, 'created_at' => now()]);

              /** Founder Management */
    Permission::insert(['module_id' => '7', 'name' => 'View founder', 'slug' => 'founder.index', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '7', 'name' => 'Show founder', 'slug' => 'founder.show', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '7', 'name' => 'Add founder', 'slug' => 'founder.create', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '7', 'name' => 'Edit founder', 'slug' => 'founder.edit', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '7', 'name' => 'delete founder', 'slug' => 'founder.destroy', 'status' => 1, 'created_at' => now()]);

     /** background Management */
     Permission::insert(['module_id' => '8', 'name' => 'View background', 'slug' => 'background.index', 'status' => 1, 'created_at' => now()]);
     Permission::insert(['module_id' => '8', 'name' => 'Show background', 'slug' => 'background.show', 'status' => 1, 'created_at' => now()]);
     Permission::insert(['module_id' => '8', 'name' => 'Add background', 'slug' => 'background.create', 'status' => 1, 'created_at' => now()]);
     Permission::insert(['module_id' => '8', 'name' => 'Edit background', 'slug' => 'background.edit', 'status' => 1, 'created_at' => now()]);
     Permission::insert(['module_id' => '8', 'name' => 'delete background', 'slug' => 'background.destroy', 'status' => 1, 'created_at' => now()]);

           /** bg memory Management */
    Permission::insert(['module_id' => '9', 'name' => 'View bg-memory', 'slug' => 'bg-memory.index', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '9', 'name' => 'Show bg-memory', 'slug' => 'bg-memory.show', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '9', 'name' => 'Add bg-memory', 'slug' => 'bg-memory.create', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '9', 'name' => 'Edit bg-memory', 'slug' => 'bg-memory.edit', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '9', 'name' => 'delete bg-memory', 'slug' => 'bg-memory.destroy', 'status' => 1, 'created_at' => now()]);

    /** heading Management */
    Permission::insert(['module_id' => '10', 'name' => 'View heading', 'slug' => 'heading.index', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '10', 'name' => 'Show heading', 'slug' => 'heading.show', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '10', 'name' => 'Add heading', 'slug' => 'heading.create', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '10', 'name' => 'Edit heading', 'slug' => 'heading.edit', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '10', 'name' => 'delete heading', 'slug' => 'heading.destroy', 'status' => 1, 'created_at' => now()]);

       /** heading Management */
    Permission::insert(['module_id' => '11', 'name' => 'View goal', 'slug' => 'goal.index', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '11', 'name' => 'Show goal', 'slug' => 'goal.show', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '11', 'name' => 'Add goal', 'slug' => 'goal.create', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '11', 'name' => 'Edit goal', 'slug' => 'goal.edit', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '11', 'name' => 'delete goal', 'slug' => 'goal.destroy', 'status' => 1, 'created_at' => now()]);


        /** Team Management */
        Permission::insert(['module_id' => '6', 'name' => 'View team', 'slug' => 'team.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '6', 'name' => 'Show team', 'slug' => 'team.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '6', 'name' => 'Add team', 'slug' => 'team.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '6', 'name' => 'Edit team', 'slug' => 'team.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '6', 'name' => 'delete team', 'slug' => 'team.destroy', 'status' => 1, 'created_at' => now()]);


        /** Service Management */
        Permission::insert(['module_id' => '6', 'name' => 'View service', 'slug' => 'service.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '6', 'name' => 'Show service', 'slug' => 'service.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '6', 'name' => 'Add service', 'slug' => 'service.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '6', 'name' => 'Edit service', 'slug' => 'service.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '6', 'name' => 'delete service', 'slug' => 'service.destroy', 'status' => 1, 'created_at' => now()]);
  /** Social Management */
  Permission::insert(['module_id' => '6', 'name' => 'View social', 'slug' => 'social.index', 'status' => 1, 'created_at' => now()]);
  Permission::insert(['module_id' => '6', 'name' => 'Show social', 'slug' => 'social.show', 'status' => 1, 'created_at' => now()]);
  Permission::insert(['module_id' => '6', 'name' => 'Add social', 'slug' => 'social.create', 'status' => 1, 'created_at' => now()]);
  Permission::insert(['module_id' => '6', 'name' => 'Edit social', 'slug' => 'social.edit', 'status' => 1, 'created_at' => now()]);
  Permission::insert(['module_id' => '6', 'name' => 'delete social', 'slug' => 'social.destroy', 'status' => 1, 'created_at' => now()]);

    /** Social Management */
    Permission::insert(['module_id' => '6', 'name' => 'View gallery', 'slug' => 'gallery.index', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '6', 'name' => 'Show gallery', 'slug' => 'gallery.show', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '6', 'name' => 'Add gallery', 'slug' => 'gallery.create', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '6', 'name' => 'Edit gallery', 'slug' => 'gallery.edit', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '6', 'name' => 'delete gallery', 'slug' => 'gallery.destroy', 'status' => 1, 'created_at' => now()]);

      /** Social Management */
  Permission::insert(['module_id' => '6', 'name' => 'View video', 'slug' => 'video.index', 'status' => 1, 'created_at' => now()]);
  Permission::insert(['module_id' => '6', 'name' => 'Show video', 'slug' => 'video.show', 'status' => 1, 'created_at' => now()]);
  Permission::insert(['module_id' => '6', 'name' => 'Add video', 'slug' => 'video.create', 'status' => 1, 'created_at' => now()]);
  Permission::insert(['module_id' => '6', 'name' => 'Edit video', 'slug' => 'video.edit', 'status' => 1, 'created_at' => now()]);
  Permission::insert(['module_id' => '6', 'name' => 'delete video', 'slug' => 'video.destroy', 'status' => 1, 'created_at' => now()]);

    /** Social Management */
    Permission::insert(['module_id' => '6', 'name' => 'View executive', 'slug' => 'executive.index', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '6', 'name' => 'Show executive', 'slug' => 'executive.show', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '6', 'name' => 'Add executive', 'slug' => 'executive.create', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '6', 'name' => 'Edit executive', 'slug' => 'executive.edit', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '6', 'name' => 'delete executive', 'slug' => 'executive.destroy', 'status' => 1, 'created_at' => now()]);

      /** Social Management */
  Permission::insert(['module_id' => '6', 'name' => 'View contract', 'slug' => 'contract.index', 'status' => 1, 'created_at' => now()]);
  Permission::insert(['module_id' => '6', 'name' => 'Show contract', 'slug' => 'contract.show', 'status' => 1, 'created_at' => now()]);
  Permission::insert(['module_id' => '6', 'name' => 'Add contract', 'slug' => 'contract.create', 'status' => 1, 'created_at' => now()]);
  Permission::insert(['module_id' => '6', 'name' => 'Edit contract', 'slug' => 'contract.edit', 'status' => 1, 'created_at' => now()]);
  Permission::insert(['module_id' => '6', 'name' => 'delete contract', 'slug' => 'contract.destroy', 'status' => 1, 'created_at' => now()]);

      /** Social Management */
      Permission::insert(['module_id' => '6', 'name' => 'View objective', 'slug' => 'objective.index', 'status' => 1, 'created_at' => now()]);
      Permission::insert(['module_id' => '6', 'name' => 'Show objective', 'slug' => 'objective.show', 'status' => 1, 'created_at' => now()]);
      Permission::insert(['module_id' => '6', 'name' => 'Add objective', 'slug' => 'objective.create', 'status' => 1, 'created_at' => now()]);
      Permission::insert(['module_id' => '6', 'name' => 'Edit objective', 'slug' => 'objective.edit', 'status' => 1, 'created_at' => now()]);
      Permission::insert(['module_id' => '6', 'name' => 'delete objective', 'slug' => 'objective.destroy', 'status' => 1, 'created_at' => now()]);

       /** Notice Management */
       Permission::insert(['module_id' => '6', 'name' => 'View notice', 'slug' => 'notice.index', 'status' => 1, 'created_at' => now()]);
       Permission::insert(['module_id' => '6', 'name' => 'Show notice', 'slug' => 'notice.show', 'status' => 1, 'created_at' => now()]);
       Permission::insert(['module_id' => '6', 'name' => 'Add notice', 'slug' => 'notice.create', 'status' => 1, 'created_at' => now()]);
       Permission::insert(['module_id' => '6', 'name' => 'Edit notice', 'slug' => 'notice.edit', 'status' => 1, 'created_at' => now()]);
       Permission::insert(['module_id' => '6', 'name' => 'delete notice', 'slug' => 'notice.destroy', 'status' => 1, 'created_at' => now()]);

        /** Help Management */
        Permission::insert(['module_id' => '6', 'name' => 'View help', 'slug' => 'help.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '6', 'name' => 'Show help', 'slug' => 'help.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '6', 'name' => 'Add help', 'slug' => 'help.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '6', 'name' => 'Edit help', 'slug' => 'help.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '6', 'name' => 'delete help', 'slug' => 'help.destroy', 'status' => 1, 'created_at' => now()]);

           /** Description Management */
           Permission::insert(['module_id' => '6', 'name' => 'View description', 'slug' => 'description.index', 'status' => 1, 'created_at' => now()]);
           Permission::insert(['module_id' => '6', 'name' => 'Show description', 'slug' => 'description.show', 'status' => 1, 'created_at' => now()]);
           Permission::insert(['module_id' => '6', 'name' => 'Add description', 'slug' => 'description.create', 'status' => 1, 'created_at' => now()]);
           Permission::insert(['module_id' => '6', 'name' => 'Edit description', 'slug' => 'description.edit', 'status' => 1, 'created_at' => now()]);
           Permission::insert(['module_id' => '6', 'name' => 'delete description', 'slug' => 'description.destroy', 'status' => 1, 'created_at' => now()]);

             /** Audience Management */
             Permission::insert(['module_id' => '6', 'name' => 'View audience', 'slug' => 'audience.index', 'status' => 1, 'created_at' => now()]);
             Permission::insert(['module_id' => '6', 'name' => 'Show audience', 'slug' => 'audience.show', 'status' => 1, 'created_at' => now()]);
             Permission::insert(['module_id' => '6', 'name' => 'Add audience', 'slug' => 'audience.create', 'status' => 1, 'created_at' => now()]);
             Permission::insert(['module_id' => '6', 'name' => 'Edit audience', 'slug' => 'audience.edit', 'status' => 1, 'created_at' => now()]);
             Permission::insert(['module_id' => '6', 'name' => 'delete audience', 'slug' => 'audience.destroy', 'status' => 1, 'created_at' => now()]);

                /** Introduction Management */
                Permission::insert(['module_id' => '6', 'name' => 'View introduction', 'slug' => 'introduction.index', 'status' => 1, 'created_at' => now()]);
                Permission::insert(['module_id' => '6', 'name' => 'Show introduction', 'slug' => 'introduction.show', 'status' => 1, 'created_at' => now()]);
                Permission::insert(['module_id' => '6', 'name' => 'Add introduction', 'slug' => 'introduction.create', 'status' => 1, 'created_at' => now()]);
                Permission::insert(['module_id' => '6', 'name' => 'Edit introduction', 'slug' => 'introduction.edit', 'status' => 1, 'created_at' => now()]);
                Permission::insert(['module_id' => '6', 'name' => 'delete introduction', 'slug' => 'introduction.destroy', 'status' => 1, 'created_at' => now()]);
     /** Project Management */
     Permission::insert(['module_id' => '6', 'name' => 'View project', 'slug' => 'project.index', 'status' => 1, 'created_at' => now()]);
     Permission::insert(['module_id' => '6', 'name' => 'Show project', 'slug' => 'project.show', 'status' => 1, 'created_at' => now()]);
     Permission::insert(['module_id' => '6', 'name' => 'Add project', 'slug' => 'project.create', 'status' => 1, 'created_at' => now()]);
     Permission::insert(['module_id' => '6', 'name' => 'Edit project', 'slug' => 'project.edit', 'status' => 1, 'created_at' => now()]);
     Permission::insert(['module_id' => '6', 'name' => 'delete project', 'slug' => 'project.destroy', 'status' => 1, 'created_at' => now()]);

    /** organization */
    Permission::insert(['module_id' => '6', 'name' => 'View organization', 'slug' => 'organization.index', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '6', 'name' => 'Show organization', 'slug' => 'organization.show', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '6', 'name' => 'Add organization', 'slug' => 'organization.create', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '6', 'name' => 'Edit organization', 'slug' => 'organization.edit', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '6', 'name' => 'delete organization', 'slug' => 'organization.destroy', 'status' => 1, 'created_at' => now()]);

    /**photo */
    Permission::insert(['module_id' => '6', 'name' => 'View photo', 'slug' => 'photo.index', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '6', 'name' => 'Show photo', 'slug' => 'photo.show', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '6', 'name' => 'Add photo', 'slug' => 'photo.create', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '6', 'name' => 'Edit photo', 'slug' => 'photo.edit', 'status' => 1, 'created_at' => now()]);
    Permission::insert(['module_id' => '6', 'name' => 'delete photo', 'slug' => 'photo.destroy', 'status' => 1, 'created_at' => now()]);

        /** support Management */
        Permission::insert(['module_id' => '6', 'name' => 'View support', 'slug' => 'support.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '6', 'name' => 'Show support', 'slug' => 'support.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '6', 'name' => 'Add support', 'slug' => 'support.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '6', 'name' => 'Edit support', 'slug' => 'support.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '6', 'name' => 'delete support', 'slug' => 'support.destroy', 'status' => 1, 'created_at' => now()]);


                /** zone Management */
                Permission::insert(['module_id' => '6', 'name' => 'View zone', 'slug' => 'zone.index', 'status' => 1, 'created_at' => now()]);
                Permission::insert(['module_id' => '6', 'name' => 'Show zone', 'slug' => 'zone.show', 'status' => 1, 'created_at' => now()]);
                Permission::insert(['module_id' => '6', 'name' => 'Add zone', 'slug' => 'zone.create', 'status' => 1, 'created_at' => now()]);
                Permission::insert(['module_id' => '6', 'name' => 'Edit zone', 'slug' => 'zone.edit', 'status' => 1, 'created_at' => now()]);
                Permission::insert(['module_id' => '6', 'name' => 'delete zone', 'slug' => 'zone.destroy', 'status' => 1, 'created_at' => now()]);

                 /** donation Management */
                 Permission::insert(['module_id' => '6', 'name' => 'View donation', 'slug' => 'donation.index', 'status' => 1, 'created_at' => now()]);
                 Permission::insert(['module_id' => '6', 'name' => 'Show donation', 'slug' => 'donation.show', 'status' => 1, 'created_at' => now()]);
                 Permission::insert(['module_id' => '6', 'name' => 'Add donation', 'slug' => 'donation.create', 'status' => 1, 'created_at' => now()]);
                 Permission::insert(['module_id' => '6', 'name' => 'Edit donation', 'slug' => 'donation.edit', 'status' => 1, 'created_at' => now()]);
                 Permission::insert(['module_id' => '6', 'name' => 'delete donation', 'slug' => 'donation.destroy', 'status' => 1, 'created_at' => now()]);

                         /** Note Management */
                 Permission::insert(['module_id' => '6', 'name' => 'View note', 'slug' => 'note.index', 'status' => 1, 'created_at' => now()]);
                 Permission::insert(['module_id' => '6', 'name' => 'Show note', 'slug' => 'note.show', 'status' => 1, 'created_at' => now()]);
                 Permission::insert(['module_id' => '6', 'name' => 'Add note', 'slug' => 'note.create', 'status' => 1, 'created_at' => now()]);
                 Permission::insert(['module_id' => '6', 'name' => 'Edit note', 'slug' => 'note.edit', 'status' => 1, 'created_at' => now()]);
                 Permission::insert(['module_id' => '6', 'name' => 'delete note', 'slug' => 'note.destroy', 'status' => 1, 'created_at' => now()]);


    }
}
