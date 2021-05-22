<?php

class Participant
{
        protected $id;
        protected $tournament_id;
        protected $name;
        protected $seed;
        protected $active;
        protected $created_at;
        protected $updated_at;
        protected $invite_email;
        protected $final_rank;
        protected $misc;
        protected $icon;
        protected $on_waiting_list;
        protected $invitation_id;
        protected $group_id;
        protected $checked_in_at;
        protected $ranked_member_id;
        protected $custom_field_response;
        protected $clinch;
        protected $integration_uids;
        protected $challonge_username;
        protected $challonge_email_address_verified;
        protected $removable;
        protected $participatable_or_invitation_attached;
        protected $confirm_remove;
        protected $invitation_pending;
        protected $display_name_with_invitation_email_address;
        protected $email_hash;
        protected $username;
        protected $display_name;
        protected $attached_participatable_portrait_url;
        protected $can_check_in;
        protected $checked_in;
        protected $reactivatable;
        protected $check_in_open;
        protected $group_player_ids;
        protected $has_irrelevant_seed;

        public function __construct($args)
        {
            $this->id = $args['id'];
            $this->tournament_id = $args['tournament_id'];
            $this->name = $args['name'];
            $this->seed = $args['seed'];
            $this->active = $args['active'];
            $this->created_at = $args['created_at'];
            $this->updated_at = $args['updated_at'];
            $this->invite_email = $args['invite_email'];
            $this->final_rank = $args['final_rank'];
            $this->misc = $args['misc'];
            $this->icon = $args['icon'];
            $this->on_waiting_list = $args['on_waiting_list'];
            $this->invitation_id = $args['invitation_id'];
            $this->group_id = $args['group_id'];
            $this->checked_in_at = $args['checked_in_at'];
            $this->ranked_member_id = $args['ranked_member_id'];
            $this->custom_field_response = $args['custom_field_response'];
            $this->clinch = $args['clinch'];
            $this->integration_uids = $args['integration_uids'];
            $this->challonge_username = $args['challonge_username'];
            $this->challonge_email_address_verified = $args['challonge_email_address_verified'];
            $this->removable = $args['removable'];
            $this->participatable_or_invitation_attached = $args['participatable_or_invitation_attached'];
            $this->confirm_remove = $args['confirm_remove'];
            $this->invitation_pending = $args['invitation_pending'];
            $this->display_name_with_invitation_email_address = $args['display_name_with_invitation_email_address'];
            $this->email_hash = $args['email_hash'];
            $this->username = $args['username'];
            $this->display_name = $args['display_name'];
            $this->attached_participatable_portrait_url = $args['attached_participatable_portrait_url'];
            $this->can_check_in = $args['can_check_in'];
            $this->checked_in = $args['checked_in'];
            $this->reactivatable = $args['reactivatable'];
            $this->check_in_open = $args['check_in_open'];
            $this->group_player_ids = $args['group_player_ids'];
            $this->has_irrelevant_seed = $args['has_irrelevant_seed'];
        }

        public function getId(){ return $this->id; }
        public function setId($id){ $this->id = $id; }
        public function getTournament_id(){ return $this->tournament_id; }
        public function setTournament_id($tournament_id){ $this->tournament_id = $tournament_id; }
        public function getName(){ return $this->name; }
        public function setName($name){ $this->name = $name; }
        public function getSeed(){ return $this->seed; }
        public function setSeed($seed){ $this->seed = $seed; }
        public function getActive(){ return $this->active; }
        public function setActive($active){ $this->active = $active; }
        public function getCreated_at(){ return $this->created_at; }
        public function setCreated_at($created_at){ $this->created_at = $created_at; }
        public function getUpdated_at(){ return $this->updated_at; }
        public function setUpdated_at($updated_at){ $this->updated_at = $updated_at; }
        public function getInvite_email(){ return $this->invite_email; }
        public function setInvite_email($invite_email){ $this->invite_email = $invite_email; }
        public function getFinal_rank(){ return $this->final_rank; }
        public function setFinal_rank($final_rank){ $this->final_rank = $final_rank; }
        public function getMisc(){ return $this->misc; }
        public function setMisc($misc){ $this->misc = $misc; }
        public function getIcon(){ return $this->icon; }
        public function setIcon($icon){ $this->icon = $icon; }
        public function getOn_waiting_list(){ return $this->on_waiting_list; }
        public function setOn_waiting_list($on_waiting_list){ $this->on_waiting_list = $on_waiting_list; }
        public function getInvitation_id(){ return $this->invitation_id; }
        public function setInvitation_id($invitation_id){ $this->invitation_id = $invitation_id; }
        public function getGroup_id(){ return $this->group_id; }
        public function setGroup_id($group_id){ $this->group_id = $group_id; }
        public function getChecked_in_at(){ return $this->checked_in_at; }
        public function setChecked_in_at($checked_in_at){ $this->checked_in_at = $checked_in_at; }
        public function getRanked_member_id(){ return $this->ranked_member_id; }
        public function setRanked_member_id($ranked_member_id){ $this->ranked_member_id = $ranked_member_id; }
        public function getCustom_field_response(){ return $this->custom_field_response; }
        public function setCustom_field_response($custom_field_response){ $this->custom_field_response = $custom_field_response; }
        public function getClinch(){ return $this->clinch; }
        public function setClinch($clinch){ $this->clinch = $clinch; }
        public function getIntegration_uids(){ return $this->integration_uids; }
        public function setIntegration_uids($integration_uids){ $this->integration_uids = $integration_uids; }
        public function getChallonge_username(){ return $this->challonge_username; }
        public function setChallonge_username($challonge_username){ $this->challonge_username = $challonge_username; }
        public function getChallonge_email_address_verified(){ return $this->challonge_email_address_verified; }
        public function setChallonge_email_address_verified($challonge_email_address_verified){ $this->challonge_email_address_verified = $challonge_email_address_verified; }
        public function getRemovable(){ return $this->removable; }
        public function setRemovable($removable){ $this->removable = $removable; }
        public function getParticipatable_or_invitation_attached(){ return $this->participatable_or_invitation_attached; }
        public function setParticipatable_or_invitation_attached($participatable_or_invitation_attached){ $this->participatable_or_invitation_attached = $participatable_or_invitation_attached; }
        public function getConfirm_remove(){ return $this->confirm_remove; }
        public function setConfirm_remove($confirm_remove){ $this->confirm_remove = $confirm_remove; }
        public function getInvitation_pending(){ return $this->invitation_pending; }
        public function setInvitation_pending($invitation_pending){ $this->invitation_pending = $invitation_pending; }
        public function getDisplay_name_with_invitation_email_address(){ return $this->display_name_with_invitation_email_address; }
        public function setDisplay_name_with_invitation_email_address($display_name_with_invitation_email_address){ $this->display_name_with_invitation_email_address = $display_name_with_invitation_email_address; }
        public function getEmail_hash(){ return $this->email_hash; }
        public function setEmail_hash($email_hash){ $this->email_hash = $email_hash; }
        public function getUsername(){ return $this->username; }
        public function setUsername($username){ $this->username = $username; }
        public function getDisplay_name(){ return $this->display_name; }
        public function setDisplay_name($display_name){ $this->display_name = $display_name; }
        public function getAttached_participatable_portrait_url(){ return $this->attached_participatable_portrait_url; }
        public function setAttached_participatable_portrait_url($attached_participatable_portrait_url){ $this->attached_participatable_portrait_url = $attached_participatable_portrait_url; }
        public function getCan_check_in(){ return $this->can_check_in; }
        public function setCan_check_in($can_check_in){ $this->can_check_in = $can_check_in; }
        public function getChecked_in(){ return $this->checked_in; }
        public function setChecked_in($checked_in){ $this->checked_in = $checked_in; }
        public function getReactivatable(){ return $this->reactivatable; }
        public function setReactivatable($reactivatable){ $this->reactivatable = $reactivatable; }
        public function getCheck_in_open(){ return $this->check_in_open; }
        public function setCheck_in_open($check_in_open){ $this->check_in_open = $check_in_open; }
        public function getGroup_player_ids(){ return $this->group_player_ids; }
        public function setGroup_player_ids($group_player_ids){ $this->group_player_ids = $group_player_ids; }
        public function getHas_irrelevant_seed(){ return $this->has_irrelevant_seed; }
        public function setHas_irrelevant_seed($has_irrelevant_seed){ $this->has_irrelevant_seed = $has_irrelevant_seed; }
}

?>
