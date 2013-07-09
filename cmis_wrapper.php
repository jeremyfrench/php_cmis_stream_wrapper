<?php
/* Before including this file include CMIS Client otherwise error will occour */

// TODO: check that cmislib is defined error if not. 

class CMISStream {
  /* Properties */
  public resource $context ;
  /* Methods */
  /**
   * Many CMIS actions use Object id. we will allways be passed a path
   */
  private __get_item_details($path) {
  
  }

  // public bool dir_closedir ( void )
  // public bool dir_opendir ( string $path , int $options )
  // public string dir_readdir ( void )
  // public bool dir_rewinddir ( void )
  // public bool mkdir ( string $path , int $mode , int $options )
  // public bool rename ( string $path_from , string $path_to )
  // public bool rmdir ( string $path , int $options )
  // public resource stream_cast ( int $cast_as )
  // public void stream_close ( void )
  // public bool stream_eof ( void )
  // public bool stream_flush ( void )
  // public bool stream_lock ( int $operation )
  // public bool stream_metadata ( string $path , int $option , mixed $value )
  // public bool stream_open ( string $path , string $mode , int $options , string &$opened_path )
  // public string stream_read ( int $count )
  // public bool stream_seek ( int $offset , int $whence = SEEK_SET )
  // public bool stream_set_option ( int $option , int $arg1 , int $arg2 )
  // public array stream_stat ( void )
  // public int stream_tell ( void )
  // public bool stream_truncate ( int $new_size )
  // public int stream_write ( string $data )
  // public bool unlink ( string $path )
  // public array url_stat ( string $path , int $flags )
}

stream_wrapper_register('cmis','CMISStream', STREAM_IS_URL);

?>
